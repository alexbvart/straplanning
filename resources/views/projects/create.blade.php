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

        <section id="crearProyecto" class="mb-4 mt-8">
            <strong>
                Hola 🖐 empecemos a crear el analisis.
            </strong>
            <p>Para empezar necesitamos unos datos .
            </p>

            <form        
                method="POST"
                action="{{route('projects.store')}}"
            >
            {{-- value="" --}}
                <x-inputinfo >
                    <x-slot name="label">Nombre</x-slot> name
                </x-inputinfo>
                <x-inputinfo>
                    <x-slot name="label">Brebe descripción</x-slot> description
                </x-inputinfo>

                @csrf
                <x-btninput class="bg-verde-action  mb-8 mr-8">
                    ¡Empezar!
                </x-btninput>

                @if (session('status'))
                    <x-alert>
                        {{session('status')}} 
                    </x-alert>
                @endif
            </form>
            
        </section>

        <section class="mb-4 mt-8">
            <strong>
                ¿Cómo realizar el análisis FODA?
            </strong>
            <p>A continuacion se le presentaràn formularios los cuales debe llenar. Empecemos a desarrollar la matriz foda
                🚀.</p>
        </section>

        <section id="geninformation" class="my-8">
            <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
                Información general de la institución
            </h1>
            <p class="text-gray-600 text-sm font-normal">
                Por favor aqui registra la informaciòn general de tu empresa.
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
                                {{ $item }}
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
