<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FemalePlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'name' => 'Martina Navratilova',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Martinanav.jpg/480px-Martinanav.jpg',
                'gender' => 'female',
                'skill_level' => 86.8,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Chris Evert',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Chris_Evert_playing_tennis_at_Camp_David.png/310px-Chris_Evert_playing_tennis_at_Camp_David.png',
                'gender' => 'female',
                'skill_level' => 90,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Steffi Graf',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Steffi_Graf_in_Hamburg_2010_%28cropped%29.jpg/329px-Steffi_Graf_in_Hamburg_2010_%28cropped%29.jpg',
                'gender' => 'female',
                'skill_level' => 88.7,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Serena Williams',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Serena-Smiling-2020.png/401px-Serena-Smiling-2020.png',
                'gender' => 'female',
                'skill_level' => 85.2,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Virginia Wade',
                'image' => '',
                'gender' => 'female',
                'skill_level' => 71.8,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Venus Williams',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Williams_V._RG21_%2811%29_%2851376275968%29.jpg/320px-Williams_V._RG21_%2811%29_%2851376275968%29.jpg',
                'gender' => 'female',
                'skill_level' => 75.9,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Arantxa Sánchez Vicario',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Arantxa_Sanchez_Vicario.JPG/414px-Arantxa_Sanchez_Vicario.JPG',
                'gender' => 'female',
                'skill_level' => 72,
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Lindsay Davenport',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Lindsay_Davenport_Indian_Wells_2006.jpg/311px-Lindsay_Davenport_Indian_Wells_2006.jpg',
                'gender' => 'female',
                'skill_level' => 79.5,
                'reaction_time' => rand(50, 100),
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
