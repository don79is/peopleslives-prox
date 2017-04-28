<?php

namespace App\Models;


class LOLPeoples extends LOLCoreModel
{
    protected $table = 'LOL_peoples';
    protected $fillable = ['id','name','phone','email','cities_id'];

    public  function  peoplesHobbiesConnections(){

        return $this->hasMany( LOLPeoplesHobbiesConnections :: class, 'lol_peoples_id', 'id')->rols()->sync(array());
    }
}
