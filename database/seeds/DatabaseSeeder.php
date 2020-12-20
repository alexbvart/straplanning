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
        /*  */
                  /* Amazon */

        App\Project::create([
            'name'=> 'Amazon',
            'description'=> 'Amazon, Inc. es una compañía estadounidense de comercio electrónico y servicios de computación en la nube',
            'user_id'=>1,
        ]);

        App\Geninformation::create([

            'mission'=>'Aprovechar la tecnología y la experiencia de nuestros empleados para ofrecer a los consumidores la mejor experiencia de compra en internet',
            'vision'=>'Ser la empresa más centrada en el cliente del mundo, donde los clientes pueden descubrir cualquier cosa que puedan querer comprar online, y comprometerse a ofrecer los precios más bajos posibles',
            'valueProposition'=>'Amazon ha sabido hacer un uso brillante de toda la información recopilada sobre sus clientes para ofrecerles, a partir de ella, una experiencia de compra personalizada a sus gustos e intereses',
            'differentiatingFactor'=>'La empresa tiene precios competitivos, ofrece entregas más rápidas que sus competidores y tiene un servicio confiable y uniforme',
            'project_id'=> 1, 
        ]);


        /* Google */

        App\Project::create([
            'name'=> 'Google',
            'description'=> 'Google, LLC es una compañía principal subsidiaria de la multinacional estadounidense ',
            'user_id'=>1,
        ]);

        App\Geninformation::create([

            'mission'=>'Organizar la información del mundo y lograr que sea útil y accesible para todo el mundo',
            'vision'=>'Ser el más prestigioso motor de búsqueda y el más importante del mundo',
            'valueProposition'=>'Anuncios segmentados, las búsquedas gratis y la remuneración por el contenido* subido a sus plataformas (YouTube, google-rewards,…)',
            'differentiatingFactor'=>'Constante innovación aplicada a todos nuestros productos, lo cual nos ha permitido irrumpir en la industria con nuevos servicios y funcionalidades que han revolucionado la manera en que buscamos, compramos, nos movemos, consumimos contenido, nos comunicamos, etc',
            'project_id'=> 2, 
        ]);
        /*  */

        App\Tipoitem::create([  'name' => 'Fortaleza' ]);
        App\Tipoitem::create([  'name' => 'Oportunidad' ]);
        App\Tipoitem::create([  'name' => 'Debilidad' ]);
        App\Tipoitem::create([  'name' => 'Amenaza' ]);
        /*  */

        factory(App\User::class,4)->create();
        factory(App\Project::class,10)->create();
        factory(App\Objetivo::class,20)->create();
        factory(App\Itemfoda::class,80)->create();
        factory(App\Geninformation::class,10)->create();
        
       /*  $this->call(ProjectsSeeder::class); */

    }
}

