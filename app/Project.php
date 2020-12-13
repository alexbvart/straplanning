<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

     /**
     * Relacion uno a uno. no funbciona
     *
     * projects -> general information
     */
    public function info()
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



    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     * Devuelve la configuración de la configuración de este modelo
     * Una URL más legible, más fácil de escribir, etc.)
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate'=> true,
            ]
        ];
    }



}
