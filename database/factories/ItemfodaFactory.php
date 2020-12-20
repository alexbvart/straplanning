<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Itemfoda;
use Faker\Generator as Faker;

$factory->define(Itemfoda::class, function (Faker $faker) {
    return [
  
        'description'=>$faker->sentence,
        'project_id'=>rand(1,2),
        'tipoitem_id'=>rand(1,4),

    ];
});
