<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoitem extends Model
{
    /* un tipo item va tener varios item foda */
    public function itemfodas()
    {
        return $this->hasMany('App\Itemfoda');
    }
}
