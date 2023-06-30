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
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Chris Evert',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Chris_Evert_playing_tennis_at_Camp_David.png/310px-Chris_Evert_playing_tennis_at_Camp_David.png',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Steffi Graf',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Steffi_Graf_in_Hamburg_2010_%28cropped%29.jpg/329px-Steffi_Graf_in_Hamburg_2010_%28cropped%29.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Serena Williams',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Serena-Smiling-2020.png/401px-Serena-Smiling-2020.png',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Conchita Martinez',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Conchita_Mart%C3%ADnez_at_the_2010_US_Open_02.jpg/480px-Conchita_Mart%C3%ADnez_at_the_2010_US_Open_02.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Venus Williams',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Williams_V._RG21_%2811%29_%2851376275968%29.jpg/320px-Williams_V._RG21_%2811%29_%2851376275968%29.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Arantxa Sánchez Vicario',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Arantxa_Sanchez_Vicario.JPG/414px-Arantxa_Sanchez_Vicario.JPG',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Lindsay Davenport',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Lindsay_Davenport_Indian_Wells_2006.jpg/311px-Lindsay_Davenport_Indian_Wells_2006.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Billie Jean King',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/BJK_headshot_2011_5x7_300dpi.jpg/342px-BJK_headshot_2011_5x7_300dpi.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Gabriela Sabatini',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Gabriela_Sabatini_US_Embassy_in_Argentina_cropped.jpg/320px-Gabriela_Sabatini_US_Embassy_in_Argentina_cropped.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Svetlana Kuznetsova',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/US_Open_2009_4th_round_126.jpg/318px-US_Open_2009_4th_round_126.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Patty Schnyder',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Patty_Schnyder.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Maria Sharapova',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Maria_Sharapova_%2843186339350%29.jpg/348px-Maria_Sharapova_%2843186339350%29.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Jelena Jankovic',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Jelena_Jankovic%2C_US_Open_2007.jpg/301px-Jelena_Jankovic%2C_US_Open_2007.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Angelique Kerber',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/06/Sydney_International_Tennis_WTA_%2839950540183%29_%28cropped%29.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
            [
                'name' => 'Caroline Wozniacki',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Caroline_Wozniacki_Madrid_Open_2015.jpg/359px-Caroline_Wozniacki_Madrid_Open_2015.jpg',
                'gender' => 'female',
                'skill_level' => rand(80, 100),
                'reaction_time' => rand(50, 100),
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
