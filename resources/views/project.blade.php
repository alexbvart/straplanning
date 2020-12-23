@extends('layouts.app')

@section('content')
    
<section class="container mx-auto px-4">

    <header class="flex items-center justify-between">
       {{--  <h2 class="text-lg leading-6 font-medium text-black"></h2> --}}
        

        <a href="{{ route('projects.index') }}"
            class="hover:bg-purple-200 hover:text-purple-800 w-1/5
                    group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">

            ←
            Volver a Cursos
        </a>

        <a href="{{ url("/{$project->slug}/pdf")}}" target="_blank" rel="noopener noreferrer">Descargar pdf</a>
        {{-- <a href="{{ url('/'.$project->name.'/pdf')}}" target="_blank" rel="noopener noreferrer">Descargar pdf</a> --}}
    </header>

    <?php 
        /* $general = $project->info->mission; var_dump($general); */
/*         $info = $project->info; */
        $items =$project->itemfodas;  
/*         $objs = $project->info->objetivos; */
    
    ?>
    
    <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
        {{$project->name}} 
    </h1>
    <p class="mb-4 leading-relaxed">
        {{$project->description}} <br><br>
    </p>
    {{-- @if ($general->count()) --}}

    @if (!empty($project->info->vision))

        <h2 class="title-font sm:text-2xl text-1xl mb-2 font-medium text-gray-900">
            Mision de {{$project->name}}
        </h2>
        <p class="mb-6 leading-relaxed">
            "{{$project->info->mission}}".
        </p>
        
        <h2 class="title-font sm:text-2xl text-1xl mb-2 font-medium text-gray-900">
            Vision de {{$project->name}}
        </h2>
        <p class="mb-6 leading-relaxed">
            "{{$project->info->vision}}".
        </p>
        
        <h2 class="title-font sm:text-2xl text-1xl mb-2 font-medium text-gray-900">
            Propuesta de valor de {{$project->name}}
        </h2>
        <p class="mb-6 leading-relaxed">
            {{$project->info->valueProposition}}
        </p>

        <h2 class="title-font sm:text-2xl text-1xl mb-2 font-medium text-gray-900">
            Factor diferenciador de {{$project->name}} 
        </h2>
        <p class="mb-6 leading-relaxed">
            {{$project->info->differentiatingFactor}}
        </p>

    @else
        Aún no defines la informacion general de de {{$project->name}}

    @endif
        
    @if (!empty($project->info->objetivos)) 
    @php
        $objs = $project->info->objetivos;
        
        /* dd($objs) ; */
    @endphp

        <h2 class="title-font sm:text-2xl text-1xl mb-2 font-medium text-gray-900">
            Objetivos de {{$project->name}}
        </h2>
        @foreach ( $objs as $obj)
        <ul>
            <li>
                - {{$obj->description}} <br>
            </li>
        </ul>
        @endforeach  
    @else
        <br>
        Aún no defines los objetivos de {{$project->name}}
    @endif 
        

    {{--
        "tipoitem_id"     
        1 fortaleza
        2 oportunidades
        3 debilidades
        4 amenazas
        shadow rounded my 
    --}}


    <h2 class="title-font sm:text-2xl text-1xl mb-2 mt-8 font-medium text-gray-900">
        Matriz FODA
    </h2>
    <div class="flex flex-wrap mx-auto bg-red-100 rounded mt-8">

        
            <div class="   bg-grey-light w-full  sm:w-1/2 p-4 bg-celeste">
                <div class="flex justify-between py-1">
                    <h3 class="text-sm">
                        Fortalezas de {{$project->name}}
                    </h3>
                </div>
                @if ($fortalezas->count())
                    <ol class="text-sm mt-2">
                    @foreach ( $fortalezas as $item)

                        @if ($item->tipoitem_id == 1)
                        <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                            {{$item->description}} {{-- || {{$item->tipoitem_id}} <br> --}}
                        </li>
                        @endif

                    @endforeach     
                    </ol>
                @else
                    no hay fortalezas :D
                @endif
            </div>



        
        <div class=" bg-grey-light  w-full  sm:w-1/2 p-4  bg-naranja">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Oportunidades de {{$project->name}}
                </h3>
            </div>

            @if ($oportunidades->count())
            <ol class="text-sm mt-2">
            @foreach ( $oportunidades as $item)

                @if ($item->tipoitem_id == 2)
                <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                    {{$item->description}}
                </li>
                @endif

            @endforeach
            </ol>
         
            @else
                no hay oportunidades :D
            @endif
        </div> 


        
        <div class="bg-grey-light  w-full  sm:w-1/2 p-4 bg-amarillo">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Debilidades de {{$project->name}}
                </h3>
            </div>
            @if ($debilidades->count())
                <ol class="text-sm mt-2">
                @foreach ( $debilidades as $item)

                    @if ($item->tipoitem_id == 3)
                    <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}}
                    </li>
                    @endif

                @endforeach  
                </ol>
            @else
                no hay debilidades, somos muy fuertes :D
            @endif
        </div>


        
        <div class=" bg-grey-light  w-full  sm:w-1/2 p-4  bg-rosa">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Amenazas de {{$project->name}}
                </h3>
            </div>
            @if ($amenazas->count())
                <ol class="text-sm mt-2">
                @foreach ( $amenazas as $item)

                    @if ($item->tipoitem_id == 4)
                    <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}}
                    </li>
                    @endif

                @endforeach 
                </ol>
            @else
                nadie nos amenaza, nosotros somos la amennaza :D
            @endif
        </div> 


    </div>



</section>

@endsection