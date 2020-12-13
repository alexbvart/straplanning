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

        factory(App\User::class,4)->create();
        factory(App\Project::class,10)->create();
        factory(App\Geninformation::class,10)->create();

    }
}
