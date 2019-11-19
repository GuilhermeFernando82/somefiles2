<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = "produtos";
    protected $fillable = [
        'name',
        'descrition',
        'piciture', 
    ];
    
    public $timestamps = false;
    
}
