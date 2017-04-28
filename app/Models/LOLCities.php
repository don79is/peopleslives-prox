<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LOLCities extends LOLCoreModel
{
    protected $table = 'LOL_cities';
    protected $fillable = ['id','name'];
}
