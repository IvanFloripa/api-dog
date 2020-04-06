<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //
    protected $fillable = [
        'raca', 'nome',
    ];
}
