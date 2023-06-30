<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{
    use HasFactory;

    /**
     * Obtener el objeto del jugador 1.
     * 
     * @return Player
     */
    public function player1()
    {
        return $this->belongsTo(Player::class, 'player1_id');
    }

    /**
     * Obtener el objeto del jugador 2.
     * 
     * @return Player
     */
    public function player2()
    {
        return $this->belongsTo(Player::class, 'player2_id');
    }

    /**
     * Obtener el resultado de un partido.
     *
     * @param Player $player1
     * @param Player $player2
     * @return Player
     */
    public function getWinner()
    {
        $player1 = $this->player1;
        $player2 = $this->player2;

        if ($player1->gender == 'female') {
            // Calcular el resultado del partido en el campeonato femenino
            $player1Score = $player1->skill_level + $player1->reaction_time + $this->getLuck();
            $player2Score = $player2->skill_level + $player2->reaction_time + $this->getLuck();
        } else {
            // Calcular el resultado del partido en el campeonato masculino
            $player1Score = $player1->skill_level + $player1->strength + $player1->speed + $this->getLuck();
            $player2Score = $player2->skill_level + $player2->strength + $player2->speed + $this->getLuck();
        }

        if ($player1Score == $player2Score) {
            return $this->getWinner();
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
}
