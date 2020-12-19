@extends('layouts.app')

@section('content')
    
<section class="container mx-auto px-4">
    {{$project->name}} <br>
    {{$project->description}} <br>
    
    mision <br>
    {{$project->info->mission}}
    <br> <br>
    vision <br>
    {{$project->info->vision}}
    <br> <br>
    Propuesta de valor<br>
    {{$project->info->valueProposition}}
    <br> <br>
    Factor diferenciador <br>
    {{$project->info->differentiatingFactor}}
    <br> <br>
{{--     
    Objetivos <br>
    <?php 
    $objs = $project->info->objetivos
    
    ?>
    <br> <br>
     @foreach ( $objs as $obj)
    - {{$obj->description}} <br>
    
    @endforeach  --}}
    

</section>

@endsection