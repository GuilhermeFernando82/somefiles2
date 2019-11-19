<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = [
        'name',
        'descrition',
        'picture', 
    ];
    
    public $timestamps = false;
}
