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
        <br><br>
        Fortalezas de {{$project->name}}
        <br>
        @foreach ( $items as $item)

            @if ($item->tipoitem_id == 1)
            - {{$item->description}} ||| {{$item->tipoitem_id}} <br>
{{--             @else
            estos no son <br> --}}
            @endif

        @endforeach  
    @else
        no hay fortalezas :D
    @endif




    @if ($items->count())
        <br><br>
        Oportunidades de {{$project->name}}
        <br>
        @foreach ( $items as $item)

            @if ($item->tipoitem_id == 2)
            - {{$item->description}} ||| {{$item->tipoitem_id}} <br>
{{--             @else
            estos no son <br> --}}
            @endif

        @endforeach  
    @else
        no hay oportunidades :D
    @endif
    


    @if ($items->count())
        <br><br>
        Debilidades de {{$project->name}}
        <br>
        @foreach ( $items as $item)

            @if ($item->tipoitem_id == 3)
            - {{$item->description}} ||| {{$item->tipoitem_id}} <br>
{{--             @else
            estos no son <br> --}}
            @endif

        @endforeach  
    @else
        no hay debilidades, somos muy fuertes :D
    @endif


    @if ($items->count())
        <br><br>
        Amenazas de {{$project->name}}
        <br>
        @foreach ( $items as $item)

            @if ($item->tipoitem_id == 4)
            - {{$item->description}} ||| {{$item->tipoitem_id}} <br>
{{--             @else
            estos no son <br> --}}
            @endif

        @endforeach  
    @else
        nadie nos amenaza, nosotros somos la amennaza :D
    @endif

</section>

@endsection