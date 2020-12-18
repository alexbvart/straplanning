<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    public function geninformation()
    {
        return $this->belongsTo('App\Geninformation');
    }
}
