<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Tournament;
use App\Models\TournamentMatch;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Match_;

class TournamentController extends Controller
{
    /**
     * Crear torneo.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
        $gender = $request->get('gender');
        $genderName = ($gender == 'female') ? 'femenino' : 'masculino';

        // Obtener los jugadores por género
        $players = Player::where('gender', $gender)->get();

        // Contar la cantidad total de jugadores/as
        $quantityPlayers = count($players);

        // Jugadores/as máximo que clasificarían, ya que debe ser potencia de 2
        $quantityQualified = $this->getPreviousPowerOfTwo($quantityPlayers);

        // Potencia de 2
        $powerOfTwo = $this->getPowerOfTwo($quantityQualified);

        return view('pages/create-tournament', [
            'genderName' => $genderName,
            'powerOfTwo' => $powerOfTwo,
        ]);
    }

    /**
     * Iniciar torneo.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start(Request $request)
    {
        $gender = $request->get('gender');
        $genderName = ($gender == 'female') ? 'femenino' : 'masculino';
        $quantity = (int) $request->get('quantity');
        $matchesQuantity = $quantity / 2;

        // Crear torneo
        $tournament = new Tournament();
        $tournament->name = 'Torneo ' . $genderName;
        $tournament->gender = $gender;
        $tournament->save();

        // Crear rondas, partidos y jugarlos
        $tournament->makeRounds(1, [], $quantity);

        // Redirigir a la vista del detalle del torneo
        return redirect()->route('show-tournament', ['id' => $tournament->id]);

    }

    /**
     * Lista de torneos.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list(Request $request)
    {
        $tournaments = Tournament::orderBy('created_at', 'DESC')->paginate(10);

        return view('pages/tournament-list', [
            'tournaments' => $tournaments,
        ]);
    }

    /**
     * Mostrar detalle del torneo.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $tournament = Tournament::find($id);

        $matchRounds = TournamentMatch::select('level')->where('tournament_id', $id)
            ->groupBy('level')
            ->get();

        $rounds = [];

        foreach ($matchRounds as $matchRound) {

            $level = $matchRound->level;
            $matches = TournamentMatch::where('tournament_id', $id)
                ->where('level', $level)
                ->get();

            foreach ($matches as $match) {

                $player1 = $match->player1;
                $player2 = $match->player2;
                $winner = $match->winner;

                if ($player1->id == $winner->id) {
                    $player1->is_winner = true;
                    $player2->is_winner = false;
                } else {
                    $player2->is_winner = true;
                    $player1->is_winner = false;
                }

                $rounds[$matchRound->level]['matches'][] = [
                    'player1' => $player1,
                    'player2' => $player2,
                    'winner' => $winner,
                ];
            }

            if (count($matches) > 1) {
                $elementPerGroup = count($rounds[$level]['matches']) / 2;
                $groups = array_chunk($rounds[$level]['matches'], $elementPerGroup);
                $rounds[$level]['groups'] = $groups;
            }

        }

        return view('pages/show-tournament', [
            'tournament' => $tournament,
            'rounds' => $rounds,
        ]);
    }

    private function getPreviousPowerOfTwo($number)
    {
        $power = (int) log($number, 2);
        $previousPowerOfTwo = pow(2, $power);

        if ($previousPowerOfTwo > $number) {
            $previousPowerOfTwo /= 2;
        }

        return $previousPowerOfTwo;
    }

    private function getPowerOfTwo($limit)
    {
        $powers = [];
        $power = 2;

        while ($power <= $limit) {
            $powers[] = $power;
            $power *= 2;
        }

        return $powers;
    }
}
