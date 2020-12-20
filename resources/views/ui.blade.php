@extends('layouts.app')


@section('content')
<div class=" container mx-auto px-4 sm:px-12">


    <section class="mb-4 mt-8">
        <strong>
            ¿Cómo realizar el análisis FODA?
        </strong>
        <p>A continuacion se le presentaràn formularios los cuales debe llenar. Empecemos a desarrollar la matriz foda 🚀.</p>
    </section>

    <section id="geninformation">
        <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
            Información general de la institución
        </h1>
        <p class="text-gray-600 text-sm font-normal">
            Por favor aqui registra la informaciòn general de tu empresa.
        </p>
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

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded mb-6">

            <x-cardinput class="bg-verde">
                <x-slot name="title">
                    Objetivos Estratégicos
                </x-slot>
                <x-slot name="color">
                    bg-verde-action
                </x-slot>
                Son los fines o metas que la organización pretende lograr en un periodo determinado de tiempo.
            </x-cardinput>
        </div>

        <x-btninput class="bg-verde-action ">
            Guardar informacion general
        </x-btninput>
    </section>


    <section>
        
    </section>


    <section>

    </section>





</div>

@endsection
