<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Player;
use App\Models\Tournament;
use App\Models\TournamentMatch;

class TournamentTest extends TestCase
{
    public function testCreatePlayers()
    {
        $playersData = [
            ['name' => 'Player 1', 'skill' => 80],
            ['name' => 'Player 2', 'skill' => 90],
            // ...
        ];

        $players = Player::factory()->count(count($playersData))->create($playersData);

        $this->assertCount(count($playersData), $players);
    }

    public function testGenerateMatches()
    {
        $players = Player::factory()->count(8)->create();

        $tournament = Tournament::factory()->create();

        $tournamentService = new TournamentService();

        $matches = $tournamentService->generateMatches($tournament, $players);

        $this->assertCount(7, $matches); // Verificar que se generen los enfrentamientos correctos
    }

    public function testCalculateWinner()
    {
        $player1 = Player::factory()->create(['skill' => 80]);
        $player2 = Player::factory()->create(['skill' => 90]);

        $tournamentMatch = TournamentMatch::factory()->create([
            'player1_id' => $player1->id,
            'player2_id' => $player2->id,
        ]);

        $tournamentService = new TournamentService();

        $winner = $tournamentService->calculateWinner($tournamentMatch);

        $this->assertEquals($player2->id, $winner->id); // Verificar que el jugador 2 sea el ganador
    }
}
