<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->sentence,
        'user_id'=>rand(1,5),
    ];
});
/* 
'slug'=>$faker-> $table->string('slug')->unique(); */