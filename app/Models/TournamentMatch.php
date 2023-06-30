<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{
    use HasFactory;

    /**
     * Obtener el objeto del jugador 1.
     */
    public function player1()
    {
        return $this->belongsTo(Player::class, 'player1_id');
    }

    /**
     * Obtener el objeto del jugador 2.
     */
    public function player2()
    {
        return $this->belongsTo(Player::class, 'player2_id');
    }
}
