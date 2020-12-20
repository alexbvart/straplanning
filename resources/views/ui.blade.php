@extends('layouts.app')


@section('content')
<div class=" container mx-auto px-4 sm:px-12">

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
/*         var_dump($items); */
    @endphp


    <section class="mb-4 mt-8">
        <strong>
            ¿Cómo realizar el análisis FODA?
        </strong>
        <p>A continuacion se le presentaràn formularios los cuales debe llenar. Empecemos a desarrollar la matriz foda 🚀.</p>
    </section>

    <section id="geninformation" class="my-8">
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

        <x-btninput class="bg-verde-action  mb-8">
            Guardar informacion general
        </x-btninput>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded mb-6">

            <x-cardinput class="bg-verde lg:w-1/3">
                <x-slot name="title">
                    Objetivos Estratégicos
                </x-slot>
                <x-slot name="color">
                    bg-verde-action
                </x-slot>
                Son los fines o metas que la organización pretende lograr en un periodo determinado de tiempo.
            </x-cardinput>

            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Objetivos Estratégicos
                </x-slot>

                @foreach ($items as $item)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                       {{$item}}
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


    </section>


    <section id="foda" class="my-24">
        <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2   text-gray-900">
            Elementos internos y externos de la empresa 
        </h1>

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

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
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

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
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

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
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

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
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


    <section id="estrategias" class="my-24">

        <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2   text-gray-900">
            Estrategias FO, FA, DO, DA
        </h1>
        <p class="text-gray-600 text-sm font-normal my-4">
            Tras realizar el análisis FODA el siguiente paso será mejorar o eliminar las debilidades, incrementar las fortalezas, aprovechar las oportunidades y hacer los planes de contingencia para atacar las amenazas.
        </p>

        <div class="fo my-16">
            <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded ">
                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Fortalezas 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

                <x-cardinput class="bg-celeste lg:w-1/3">
                    <x-slot name="title">
                        Estrategias FO: Enfoque de éxito 
                    </x-slot>
                    <x-slot name="color">
                        bg-celeste-action
                    </x-slot>
                    Se detecta respondiendo el siguiente cuestionamiento: ¿Cómo puedo usar mis fortalezas para aprovechar mis oportunidades?
                </x-cardinput>

                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Oportunidades 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

            </div>
            <x-table class="mx-auto" isEditable=true>
                <x-slot name="title">
                    Estrategias FO
                </x-slot>

                @foreach ($items as $item)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                    {{$item}}
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

        <div class="fa my-20">
            <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded ">
                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Fortalezas 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

                <x-cardinput class="bg-naranja lg:w-1/3">
                    <x-slot name="title">
                        Estrategias FA: Enfoque de reacción
                    </x-slot>
                    <x-slot name="color">
                        bg-naranja-action
                    </x-slot>
                    Continúa con la evaluación de las fortalezas pero ahora vs las amenazas: ¿Cómo usar mis fortalezas para disminuir las amenazas?
                </x-cardinput>

                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Amenazas
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

            </div>
            <x-table class="mx-auto" isEditable=true>
                <x-slot name="title">
                    Estrategias FA: Enfoque de reacción
                </x-slot>

                @foreach ($items as $item)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                    {{$item}}
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

        <div class="do my-20">
            <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded ">
                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Debilidades 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

                <x-cardinput class="bg-amarillo lg:w-1/3">
                    <x-slot name="title">
                        Estrategias DO: Enfoque de adaptación
                    </x-slot>
                    <x-slot name="color">
                        bg-amarillo-action
                    </x-slot>
                    Comparamos las oportunidades con las debilidades: ¿Cómo puedo aprovechar las oportunidades para corregir mis debilidades?
                </x-cardinput>

                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Oportunidades 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

            </div>
            <x-table class="mx-auto isEditable=true">
                <x-slot name="title">
                    Estrategias DO
                </x-slot>

                @foreach ($items as $item)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                    {{$item}}
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

        <div class="da my-16">
            <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded ">
                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Debilidades 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

                <x-cardinput class="bg-rosa lg:w-1/3">
                    <x-slot name="title">
                        Estrategias DA: Enfoque de supervivencia
                    </x-slot>
                    <x-slot name="color">
                        bg-rosa-action
                    </x-slot>
                    En el que comparamos las debilidades con las amenazas: ¿Cómo mantenernos en pie frente a las amenazas?
                </x-cardinput>

                <x-table class="lg:w-1/3">
                    <x-slot name="title">
                        Amenazas 
                    </x-slot>

                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-100  border-gray-200">
                        <td class="px-4 py-4">
                        {{$item}}
                        </td>
                    </tr>
                    @endforeach
                </x-table>

            </div>
            <x-table class="mx-auto" isEditable=true>
                <x-slot name="title">
                    Estrategias DA
                </x-slot>

                @foreach ($items as $item)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                    {{$item}}
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




    </section>





</div>

@endsection
