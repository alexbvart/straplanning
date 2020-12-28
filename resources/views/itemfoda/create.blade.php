@extends('layouts.app')

@section('content')
@php

/*  dd($projects);       var_dump($projects);  */
@endphp

<div class=" container mx-auto px-4 sm:px-12">

<section id="foda" class="my-24">
    <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2   text-gray-900">
        Elementos internos y externos de {{$project->name}}
    </h1>

{{--     <div class="form-group my-4">
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
    </div> --}}
    <select class="form-control selector" name="project_id" id="project_id">
    <option {{ old('project_id') == $project->id ? 'selected' : '' }} 
            value="{{$project->id}}">{{$project->name}}
        </option>

    </select>
    <div class="interno">
        <div class="my-4">        
            <strong>
                Análisis interno
            </strong>
            <p class="text-gray-600 text-sm font-normal">
                Primeros empecemos agregando los elementos internos de la empresa, recordemos que estos se refieren a todas las cosas que están dentro de la empresa y bajo su control, sin importar si son tangibles o intangibles.
            </p>
        </div>

        <section class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">
            
            <x-cardinput class="bg-celeste lg:w-1/3">
                <form method="POST" action="{{ route('foda.store') }}" id="addFortalezas">
                    @method('POST')
                    @csrf
                    <x-slot name="title">
                        Fortalezas
                    </x-slot>
                    <x-slot name="color">
                        bg-celeste-action
                    </x-slot>
                    Agrega todos los atributos o puntos positivos que pueden servir para alcanzar los objetivos de la empresa.
                   
                    <span id=selectedCompanyF></span>
                    <textarea cols="30" rows="3"
                        name="description"
                        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
                        placeholder="Message"></textarea >
                    
                    {{-- <input type="hidden" value="{{$project->id}}" name="project_id"> --}}
                    <input type="hidden" value="1" name="tipoitem_id">
                
                    <x-btninput class="bg-celeste-action"  >
                        Agregar a la lista
                    </x-btninput>

                </form>
            </x-cardinput> 

                <x-table class="lg:w-2/3">
                    <x-slot name="title">
                        Fortalezas
                    </x-slot>

                    @foreach ($fortalezas as $project)
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
            </section>
        


        

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

            <x-cardinput class="bg-naranja lg:w-1/3">
                <form method="POST" action="{{ route('foda.store') }}">
                    @method('POST')
                    @csrf
                    <x-slot name="title">
                        Debilidades 
                    </x-slot>
                    Agrega todo lo que es perjudicial o los factores que pueden ser desfavorables para nuestro objetivo.
                                       
                    <span id=selectedCompanyD></span>
                    <textarea cols="30" rows="3"
                        name="description"
                        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
                        placeholder="Message"></textarea >
                    
                    {{-- <input type="hidden" value="{{$project->id}}" name="project_id"> --}}
                    <input type="hidden" value="3" name="tipoitem_id">

                
                    <x-btninput class="bg-naranja-action" >
                        Agregar a la lista
                    </x-btninput> 
    
                </form>
            </x-cardinput>
            <x-table class="lg:w-2/3" isEditable=true >
                <x-slot name="title">
                    Debilidades 
                </x-slot>

                @foreach ($debilidades as $project)
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
                <form method="POST" action="{{ route('foda.store') }}">
                    @method('POST')
                    @csrf
                    <x-slot name="title">
                        Oportunidades
                    </x-slot>
                    <x-slot name="color">
                        bg-amarillo-action
                    </x-slot>
                    Agrega todas las condiciones externas, revisando la industria y otros factores como las regulaciones que pueden afectar de forma positiva a nuestro objetivo.
                    
                    <span id=selectedCompanyO></span>
                    <textarea cols="30" rows="3"
                        name="description"
                        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
                        placeholder="Message"></textarea >
                    
                    {{-- <input type="hidden" value="{{$project->id}}" name="project_id"> --}}
                    <input type="hidden" value="2" name="tipoitem_id">

                
                    <x-btninput class="bg-amarillo-action"  >
                        Agregar a la lista
                    </x-btninput>
                </form>

            </x-cardinput>

            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Oportunidades 
                </x-slot>

                @foreach ($oportunidades as $project)
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
                <form method="POST" action="{{ route('foda.store') }}">
                    @method('POST')
                    @csrf
                    <x-slot name="title">
                        Amenazas 
                    </x-slot>
                    <x-slot name="color">
                        bg-rosa-action
                    </x-slot>
                    Agrega lo perjudicial, todo lo que puede amenazar nuestra supervivencia y la potencial ganancia de resultados de forma externa.
                    <span id=selectedCompanyA></span>
                    <textarea cols="30" rows="3"
                        name="description"
                        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
                        placeholder="Message"></textarea >
                    
                   {{--  <input type="hidden" value="{{$project->id}}" name="project_id"> --}}
                    <input type="hidden" value="4" name="tipoitem_id">

                
                    <x-btninput class="bg-rosa-action"  >
                        Agregar a la lista
                    </x-btninput>

                </form>    
            </x-cardinput>
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Amenazas 
                </x-slot>

                @foreach ($amenazas as $project)
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

</section>
</div>
<script>
    $(document).ready(function () {
        console.log('Hello desde js');
        console.log('jQuery is working');
        
/*         $('#project_id').change(function (e) { 
            if ($(this).val()!='') {*/
                let value = $('#project_id').val();
                document.getElementById('selectedCompanyF').innerHTML=`
                    <input type="hidden" value="${value}" name="project_id">
                `;
                document.getElementById('selectedCompanyO').innerHTML=`
                    <input type="hidden" value="${value}" name="project_id">
                `;
                document.getElementById('selectedCompanyD').innerHTML=`
                    <input type="hidden" value="${value}" name="project_id">
                `;
                document.getElementById('selectedCompanyA').innerHTML=`
                    <input type="hidden" value="${value}" name="project_id">
                `;
                console.log(value);
                $('#project_id').hide();
                
 /*           }
         })  */

        $('#addFortalezas').submit(function (e) {
            /* e.preventDefault(); */
            console.log("fortaleza no resfresques la pagina");

        
        });

    });
</script>

@endsection


