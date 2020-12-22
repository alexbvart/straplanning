@extends('layouts.app')

@section('content')

@php
$items = array(
"Baja estructura de costos, la mayor selección de mercaderías y una gran cantidad de terceros vendedores",
"Sinergia entre Marketplace, Web Services y Prime",
"Excelente atención al cliente",
"Logística",
"Top of mind",
"Adquisiciones",
"Estrategia “GLOCAL”"
);
/* var_dump($items); */
@endphp

<div class=" container mx-auto px-4 sm:px-12">



    <section class="mb-4 mt-8">
        <strong>
            ¿Cómo realizar el análisis FODA?
        </strong>
        <p>A continuación se le presentaràn formularios los cuales debe llenar. Empecemos a desarrollar la matriz foda
            🚀.</p>
        </section>

        <form
        method="POST"
        action="{{route('StoreGeneralInformation')}}"
        >

        <section id="geninformation" class="my-8">
            <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
                Información general de la institución
            </h1>

            <p class="text-gray-600 text-sm font-normal">
                Por favor aquí registra la información general de tu empresa.
            </p>
            <x-inputinfo >
                <x-slot name="label">Misión</x-slot> mission
            </x-inputinfo>

            <x-inputinfo>
                <x-slot name="label">Visión</x-slot> vision
            </x-inputinfo>

            <x-inputinfo>
                <x-slot name="label">Propuesta de valor</x-slot> valueProposition
            </x-inputinfo>

            <x-inputinfo>
                <x-slot name="label">Factor diferenciador</x-slot> differentiatingFactor
            </x-inputinfo>

            <x-btninput class="bg-verde-action  mb-8">
                Guardar información general
            </x-btninput>


        </section>

        @if (session('status'))
        <x-alert>
            {{session('status')}}
        </x-alert>
        @endif
    </form>


</div>

@endsection
