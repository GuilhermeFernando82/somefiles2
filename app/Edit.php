<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    protected $fillable = [
        'nome',
        'senha',
        'email', 
    ];
    public $timestamps = false;
}
