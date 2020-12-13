<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Alexander Briones',
            'email' => 'alexanderbvart@gmail.com',
            'password' => bcrypt('alexx123'), // password
        ]);

        App\Project::create([
            'name'=> 'Amazon',
            'description'=> 'Amazon, Inc. es una compañía estadounidense de comercio electrónico y servicios de computación en la nube',
            'user_id'=>1,
        ]);

        App\Project::create([
            'name'=> 'Google',
            'description'=> 'Google, LLC es una compañía principal subsidiaria de la multinacional estadounidense ',
            'user_id'=>1,
        ]);


        factory(App\User::class,4)->create();
        factory(App\Project::class,10)->create();
        factory(App\Geninformation::class,10)->create();

    }
}


/* 'name' => $faker->name,
'email' => $faker->unique()->safeEmail,
'email_verified_at' => now(),
'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
'remember_token' => Str::random(10), */