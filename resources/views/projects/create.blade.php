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
                Hola 🖐 empecemos a crear el análisis.
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
                    <x-slot name="label">Breve descripción</x-slot> description
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

    </div>

@endsection
