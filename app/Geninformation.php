<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geninformation extends Model
{
    //
}
     /**
     * Relacion uno a uno (inversa).
     *
     * projects -> general information  -->>--   general information <-  projects
     
    public function project()
    {
        return $this->belongsTo('App\Project');
    }*/ 