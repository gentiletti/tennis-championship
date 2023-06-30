<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Tournament;

class TournamentTest extends TestCase
{
    public function testMakeTournament()
    {
        $torneo = Tournament::find(1);
        $matches = $torneo->matches;

        $this->assertNotEmpty($matches);
    }
}
