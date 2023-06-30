<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MalePlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'name' => 'Jimmy Connors',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Jimmy_connors.jpg/316px-Jimmy_connors.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Roger Federer',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/R_federer.jpg/379px-R_federer.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Rafael Nadal',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Rafael_Nadal_%2812054444625%29.jpg/429px-Rafael_Nadal_%2812054444625%29.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Ivan Lendl',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Lendl_CU.jpg/405px-Lendl_CU.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Guillermo Vilas',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Vilas-1975.jpg/326px-Vilas-1975.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Ilie Nastase',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Ilie_N%C4%83stase_2009_US_Open_02.jpg/384px-Ilie_N%C4%83stase_2009_US_Open_02.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'John McEnroe',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/John_McEnroe_by_David_Shankbone.jpg/366px-John_McEnroe_by_David_Shankbone.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Andre Agassi',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Andre_Agassi_%282011%29.jpg/380px-Andre_Agassi_%282011%29.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Stefan Edberg',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Stefan_Edberg_B%C3%A5stad_sweden_20070708.jpg/480px-Stefan_Edberg_B%C3%A5stad_sweden_20070708.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Arthur Ashe',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Arthur_Ashe_%28cropped%29.jpg/349px-Arthur_Ashe_%28cropped%29.jpg',
                'gender' => 'male',
                'skill_level' => rand(80, 100),
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
