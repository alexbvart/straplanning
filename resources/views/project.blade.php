@extends('layouts.app')

@section('content')
    

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
Objetivos <br>



<br> <br>
{{-- @foreach ( {{$project->info->objetivos}} as $project)

@endforeach 
 --}}
@endsection