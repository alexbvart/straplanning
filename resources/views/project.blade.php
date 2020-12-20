@extends('layouts.app')

@section('content')
    
<section class="container mx-auto px-4">

    <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
        {{$project->name}} 
    </h1>
    <p class="mb-4 leading-relaxed">
        {{$project->description}} <br><br>
    </p>
    
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

    
   {{--  {{$project->info->objetivos}} --}}
    <?php 
        $objs = $project->info->objetivos;
        $items =$project->itemfodas;
    ?>
    
        

       

    @if ($objs->count())
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
        no hay objetivos :D
    @endif

{{-- todos los items
    @if ($items->count())
        items de {{$project->name}}
        <br> <br>
        @foreach ( $items as $item)
        - {{$item->description}} <br>

        @endforeach  
    @else
        no hay objetivos :D
    @endif --}}

{{--"tipoitem_id"     
    1 fortaleza
    2 oportunidades
    3 debilidades
    4 amenazas
    shadow rounded my --}}
    <h2 class="title-font sm:text-2xl text-1xl mb-2 mt-8 font-medium text-gray-900">
        Matriz FODA
    </h2>
    <div class="flex flex-wrap mx-auto bg-red-100 rounded mt-8">

        @if ($items->count())
            <div class="   bg-grey-light w-full  sm:w-1/2 p-4 bg-blue-100">
                <div class="flex justify-between py-1">
                    <h3 class="text-sm">
                        Fortalezas de {{$project->name}}
                    </h3>
                </div>
                
                <ol class="text-sm mt-2">
                @foreach ( $items as $item)

                    @if ($item->tipoitem_id == 1)
                    <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}} {{-- || {{$item->tipoitem_id}} <br> --}}
                    </li>
                    @endif

                @endforeach     
                </ol>
            </div>
        @else
            no hay fortalezas :D
        @endif



        @if ($items->count())
        <div class=" bg-grey-light  w-full  sm:w-1/2 p-4  bg-red-100">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Oportunidades de {{$project->name}}
                </h3>
            </div>
            <ol class="text-sm mt-2">
            @foreach ( $items as $item)

                @if ($item->tipoitem_id == 2)
                <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                    {{$item->description}}
                </li>
                @endif

            @endforeach
            </ol>
        </div>  
        @else
            no hay oportunidades :D
        @endif
        


        @if ($items->count())
        <div class="bg-grey-light  w-full  sm:w-1/2 p-4 bg-indigo-200">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Debilidades de {{$project->name}}
                </h3>
            </div>
            <ol class="text-sm mt-2">
            @foreach ( $items as $item)

                @if ($item->tipoitem_id == 3)
                <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                    {{$item->description}}
                </li>
                @endif

            @endforeach  
            </ol>
        </div>  
        @else
            no hay debilidades, somos muy fuertes :D
        @endif


        @if ($items->count())
        <div class=" bg-grey-light  w-full  sm:w-1/2 p-4  bg-green-100">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">
                    Amenazas de {{$project->name}}
                </h3>
            </div>
            <ol class="text-sm mt-2">
            @foreach ( $items as $item)

                @if ($item->tipoitem_id == 4)
                <li class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                    {{$item->description}}
                </li>
                @endif

            @endforeach 
            </ol>
        </div>   
        @else
            nadie nos amenaza, nosotros somos la amennaza :D
        @endif


    </div>



</section>

@endsection