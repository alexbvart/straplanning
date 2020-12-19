@extends('layouts.app')

@section('content')
    
<section class="container mx-auto px-4">
    {{$project->name}} <br><br>
    {{$project->description}} <br><br>
    
    Mision de {{$project->name}} <br>
    "{{$project->info->mission}}".
    <br> <br>
    Vision de {{$project->name}}  <br>
    "{{$project->info->vision}}".
    <br> <br>
    Propuesta de valor de {{$project->name}} <br>
    {{$project->info->valueProposition}}
    <br> <br>
    Factor diferenciador de {{$project->name}}  <br>
    {{$project->info->differentiatingFactor}}
    <br> <br>
    
   {{--  {{$project->info->objetivos}} --}}
    <?php 
        $objs = $project->info->objetivos;
        $items =$project->itemfodas;
    ?>


    @if ($objs->count())
        <br>
            Objetivos de {{$project->name}}
        <br> 
        @foreach ( $objs as $obj)
        - {{$obj->description}} <br>
        
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
    4 amenazas --}}

    @if ($items->count())
        <div class="rounded bg-grey-light flex-no-shrink w-full  sm:w-1/2 p-4 my-4 bg-blue-100">
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
    <div class="rounded bg-grey-light flex-no-shrink w-full  sm:w-1/2 p-4 my-4 bg-red-100">
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
    <div class="rounded bg-grey-light flex-no-shrink w-full  sm:w-1/2 p-4 my-4 bg-indigo-100">
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
    <div class="rounded bg-grey-light flex-no-shrink w-full  sm:w-1/2 p-4 my-4 bg-green-100">
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

    <br><br>


</section>

@endsection