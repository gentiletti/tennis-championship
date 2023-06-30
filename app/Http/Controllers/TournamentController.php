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
        $quantity = (integer) $request->get('quantity');
        $matchesQuantity = $quantity / 2;

        // Crear torneo
        $tournament = new Tournament();
        $tournament->name = 'Torneo ' . $genderName;
        $tournament->gender = $gender;
        $tournament->save();

        // Crear rondas, partidos y jugarlos
        $rounds = $tournament->makeRounds(1, [], $quantity);
        //dd($rounds);

        return view('pages/start-tournament', [
            'genderName' => $genderName,
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
