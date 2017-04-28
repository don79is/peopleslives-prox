<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LOLPeoplesHobbiesConnections extends LOLCoreModel
{
    protected $table = 'LOL_peoples_hobbies_connections';
    protected $fillable = ['id','lol_peoples_id','lol_hobbies_id'];
}
