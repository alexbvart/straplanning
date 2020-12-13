<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

     /**
     * Relacion uno a uno.
     *
     * projects -> general information
     */
    public function general()
    {
        return $this->hasOne('App\Geninformation');
    }





    //
     /**
     * Relación uno a muchos (inversa).
     *
     * users->projects ..>>.. projects <- users
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
