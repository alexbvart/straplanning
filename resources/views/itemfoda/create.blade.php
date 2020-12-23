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

/*  dd($projects);       var_dump($projects);  */
@endphp

<div class=" container mx-auto px-4 sm:px-12">

<section id="foda" class="my-24">
    <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2   text-gray-900">
        Elementos internos y externos de la empresa 
    </h1>

    <div class="form-group my-4">
        <label for="project_id">Proyecto</label>
        <select class="form-control selector" name="project_id" id="project_id">
            <option value="" class="opcionMuestra form-control ">
                Seleccione un proyecto</option>
            @foreach ($projects as $project)
                <option {{ old('project_id') == $project->id ? 'selected' : '' }} 
                    value="{{$project->id}}">{{$project->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="interno">
        <div class="my-4">        
            <strong>
                Análisis interno
            </strong>
            <p class="text-gray-600 text-sm font-normal">
                Primeros empecemos agregando los elementos internos de la empresa, recordemos que estos se refieren a todas las cosas que están dentro de la empresa y bajo su control, sin importar si son tangibles o intangibles.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

            <x-cardinput class="bg-celeste lg:w-1/3">
                <x-slot name="title">
                    Fortalezas
                </x-slot>
                <x-slot name="color">
                    bg-celeste-action
                </x-slot>
                Agrega todos los atributos o puntos positivos que pueden servir para alcanzar los objetivos de la empresa.
            </x-cardinput> 
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Fortalezas
                </x-slot>

                @foreach ($projects as $project)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                    {{$project->description}}
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-red-500 hover:text-red-700 hover:bg-red-50">
                        Eliminar
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                        Editar
                    </td>
                </tr>
                @endforeach
            </x-table>
        </div>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

            <x-cardinput class="bg-naranja lg:w-1/3">
                <x-slot name="title">
                    Debilidades 
                </x-slot>
                <x-slot name="color">
                    bg-naranja-action
                </x-slot>
                Agrega todo lo que es perjudicial o los factores que pueden ser desfavorables para nuestro objetivo.
            </x-cardinput>
            <x-table class="lg:w-2/3" isEditable=true >
                <x-slot name="title">
                    Debilidades 
                </x-slot>

                @foreach ($projects as $project)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                        {{$project->description}}
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-red-500 hover:text-red-700 hover:bg-red-50">
                        Eliminar
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                        Editar
                    </td>
                </tr>
                @endforeach
            </x-table>
        </div>
    </div>


    <div class="externo mt-20">
        <div class="my-4">        
            <strong>
                Análisis externo
            </strong>
            <p class="text-gray-600 text-sm font-normal">
                A diferencia de los elementos internos de la empresa, los elementos externos son aquellos factores incontrolables que pueden influir en el rendimiento de una organización.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

            <x-cardinput class="bg-amarillo lg:w-1/3">
                <x-slot name="title">
                    Oportunidades
                </x-slot>
                <x-slot name="color">
                    bg-amarillo-action
                </x-slot>
                Agrega todas las condiciones externas, revisando la industria y otros factores como las regulaciones que pueden afectar de forma positiva a nuestro objetivo.
            </x-cardinput>
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Oportunidades 
                </x-slot>

                @foreach ($projects as $project)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                        {{$project->description}}
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-red-500 hover:text-red-700 hover:bg-red-50">
                        Eliminar
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                        Editar
                    </td>
                </tr>
                @endforeach
            </x-table>

        </div>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

            <x-cardinput class="bg-rosa lg:w-1/3">
                <x-slot name="title">
                    Amenazas 
                </x-slot>
                <x-slot name="color">
                    bg-rosa-action
                </x-slot>
                Agrega lo perjudicial, todo lo que puede amenazar nuestra supervivencia y la potencial ganancia de resultados de forma externa.
            </x-cardinput>
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Amenazas 
                </x-slot>

                @foreach ($projects as $project)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                        {{$project->itemfodas}}
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-red-500 hover:text-red-700 hover:bg-red-50">
                        Eliminar
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                        Editar
                    </td>
                </tr>
                @endforeach
            </x-table>
            
        </div>
    </div>


</section>
</div>

@endsection
