<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MalePlayer extends Player
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'skill_level',
        'strength',
        'speed',
    ];
}
