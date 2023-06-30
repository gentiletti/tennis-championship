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
     * Obtener el objeto del jugador campeón.
     * 
     * @return Player
     */
    public function winner()
    {
        return $this->belongsTo(Player::class, 'winner_id');
    }

    /**
     * Crear las rondas
     */
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

            $winner = $match->getWinner();

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
