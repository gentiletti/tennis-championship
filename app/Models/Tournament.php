<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    /**
     * Obtener los partidos del torneo
     */
    public function matches()
    {
        return $this->hasMany(TournamentMatch::class);
    }

    /**
     * Obtener el resultado de un partido en el campeonato femenino.
     *
     * @param Player $player1
     * @param Player $player2
     * @return Player
     */
    public function getFemaleResult(Player $player1, Player $player2)
    {
        // Calcular el resultado del partido en el campeonato femenino
        $player1Score = $player1->skill_level + $player1->reaction_time + $this->getLuck();
        $player2Score = $player2->skill_level + $player2->reaction_time + $this->getLuck();

        if ($player1Score == $player2Score) {
            return $this->getFemaleResult($player1, $player2);
        }

        // Aquí se retorna el jugador ganador del partido
        return ($player1Score > $player2Score) ? $player1 : $player2;
    }

    /**
     * Obtener el resultado de un partido en el campeonato masculino.
     *
     * @param Player $player1
     * @param Player $player2
     * @return Player
     */
    public function getMaleResult(Player $player1, Player $player2)
    {
        // Calcular el resultado del partido en el campeonato masculino
        $player1Score = $player1->skill_level + $player1->strength + $player1->speed + $this->getLuck();
        $player2Score = $player2->skill_level + $player2->strength + $player2->speed + $this->getLuck();

        if ($player1Score == $player2Score) {
            return $this->getMaleResult($player1, $player2);
        }

        // Aquí se retorna el jugador ganador del partido
        return ($player1Score > $player2Score) ? $player1 : $player2;
    }

    /**
     * Obtener un factor aleatorio de suerte.
     *
     * @return float
     */
    private function getLuck()
    {
        // Generar un número aleatorio entre 0 y 50 para representar el factor de suerte
        return rand(0, 50);
    }

    public function makeRounds($level, $rounds, $quantity = null)
    {
        if ($quantity) {
            // Obtener los jugadores por género
            $players = Player::where('gender', $this->gender)->limit($quantity)
                ->inRandomOrder()
                ->get();
        } else {
            $players = Player::select('players.*')
                ->join('tournament_matches as m', 'm.winner_id', '=', 'players.id')
                ->where('tournament_id', $this->id)
                ->where('m.level', $level - 1)
                ->inRandomOrder()
                ->get();

            $quantity = count($players);
        }

        // Crear partidos y jugarlos
        for ($i = 0; $i < count($players); $i += 2) {

            $player1 = $players[$i];
            $player2 = $players[$i + 1];

            $match = new TournamentMatch();
            $match->tournament_id = $this->id;
            $match->player1_id = $player1->id;
            $match->player2_id = $player2->id;
            $match->level = $level;

            if ($this->gender == 'female') {
                $winner = $this->getFemaleResult($player1, $player2);
            } else {
                $winner = $this->getMaleResult($player1, $player2);
            }

            if ($player1->id == $winner->id) {
                $player1->is_winner = true;
                $player2->is_winner = false;
            } else {
                $player2->is_winner = true;
                $player1->is_winner = false;
            }

            $rounds[$level]['matches'][] = [
                'player1' => $player1,
                'player2' => $player2,
                'winner' => $winner,
            ];

            $match->winner_id = $winner->id;
            $match->save();
        }

        if ($quantity >= 4) {

            $elementPerGroup = count($rounds[$level]['matches']) / 2;
            $groups = array_chunk($rounds[$level]['matches'], $elementPerGroup);
            $rounds[$level]['groups'] = $groups;

            return $this->makeRounds($level + 1, $rounds);
        } else if ($quantity > 2) {
            return $this->makeRounds($level + 1, $rounds);
        } else {

            $this->is_finished = 1;
            $this->winner_id = $winner->id;
            $this->save();

            return $rounds;
        }
    }
}
