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
                'skill_level' => 81.82,
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Roger Federer',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/R_federer.jpg/379px-R_federer.jpg',
                'gender' => 'male',
                'skill_level' => 81.98,
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Rafael Nadal',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Rafael_Nadal_%2812054444625%29.jpg/429px-Rafael_Nadal_%2812054444625%29.jpg',
                'gender' => 'male',
                'skill_level' => 82.92,
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
            [
                'name' => 'Ivan Lendl',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Lendl_CU.jpg/405px-Lendl_CU.jpg',
                'gender' => 'male',
                'skill_level' => 81.53,
                'strength' => rand(50, 100),
                'speed' => rand(50, 100),
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
