@extends('layouts.app')

@section('content')

<div class=" container mx-auto px-4 sm:px-12">

    <header class="flex items-center justify-between">
        <h2 class="text-lg leading-6 font-medium text-black"></h2>
        <a href="{{ route('projects.index') }}"
            class="hover:bg-purple-200 hover:text-purple-800 w-1/5
                    group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">

            ←
            Volver a Cursos
        </a>
    </header>

    <section id="crearProyecto" class="mb-4 mt-8">
        <strong>
            Seguro cambiaste de parecer y tienes algunos cambios.
        </strong>
        <p>Para empezar necesitamos unos datos .
        </p>

        <form        
            method="POST"
            action="{{route('projects.update', $project)}}"
        >

            <x-inputinfo value="{{old('name', $project->name)}}">
                <x-slot name="label">Nombre</x-slot> name
            </x-inputinfo>
            <x-inputinfo value="{{old('description', $project->description)}}">
                <x-slot name="label">Brebe descripción</x-slot> description
            </x-inputinfo>

            @csrf
            @method('PUT')
            <x-btninput class="bg-verde-action  mb-8 mr-8">
                Actualizar
            </x-btninput>

            @if (session('status'))
                <x-alert>
                    {{session('status')}} 
                </x-alert>
            @endif
        </form>
        
    </section>


    <section id="geninformation" class="my-8">
        <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
            Información general de la institución
        </h1>
        <p class="text-gray-600 text-sm font-normal">
            Por favor aqui registra la informaciòn general de tu empresa.
        </p>


        <form action="">

        
            <x-inputinfo >  
                <x-slot name="label">Misión</x-slot>        mission  
            </x-inputinfo>

            <x-inputinfo >  
                <x-slot name="label">Visión</x-slot>          vision
            </x-inputinfo>

            <x-inputinfo >  
                <x-slot name="label">Propuesta de valor</x-slot>      valueProposition    
            </x-inputinfo>

            <x-inputinfo >  
                <x-slot name="label">Factor diferenciador</x-slot>      differentiatingFactor    
            </x-inputinfo>

            <x-btninput class="bg-verde-action  mb-8">
                Guardar informacion general
            </x-btninput>
        </form>
    </section>


</div>

@endsection

