<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\TournamentMatch;
use App\Models\Player;

class TournamentMatchTest extends TestCase
{
    public function testCalculateWinner()
    {
        $player1 = Player::where('name', 'Martina Navratilova')->first();
        $player2 = Player::where('name', 'Steffi Graf')->first();

        $match = new TournamentMatch();
        $match->player1 = $player1;
        $match->player2 = $player2;

        $winner = $match->getWinner();

        $this->assertContains($winner->id, [$player1->id, $player2->id]);
    }

    public function testMatchResult()
    {
        $match = TournamentMatch::find(1);
        $winner = $match->winner;

        $this->assertNotNull($winner);
    }
}
