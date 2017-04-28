<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LOLHobbies extends LOLCoreModel
{
    protected $table = 'LOL_hobbies';
    protected $fillable = ['id','name'];
}
