<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemfoda extends Model
{
    //
    /* Relacion uno a muchos pero inversa 
    *  Projects <- Item foda 
    *  Un item dofa estara presente en varios proyectos
    */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }


    /* 
    *   Realcion inversa
    *   Tipoitem <- Item foda
    *   un item foda va pertenecera los diferentes tipo de item foda 
    */
    public function tipoitem()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'description',
        'project_id',
        'tipoitem_id'
];
}
