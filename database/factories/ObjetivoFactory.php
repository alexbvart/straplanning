<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Objetivo;
use Faker\Generator as Faker;

$factory->define(Objetivo::class, function (Faker $faker) {
    return [

        'description'=>$faker->sentence,
        'geninformation_id'=>rand(1,2),
    ];
});
