<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_games extends Model
{
    use HasFactory;

    protected $fillable = [
        'list_id',
        'game_id',
    ];
}
