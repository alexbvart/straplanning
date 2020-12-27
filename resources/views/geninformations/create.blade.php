@extends('layouts.app')

@section('content')

    <div class=" container mx-auto px-4 sm:px-12">



        <section class="mb-4 mt-8">
            <strong>
                ¿Cómo realizar el análisis FODA?
            </strong>
            <p>A continuación se le presentarán formularios los cuales debe llenar. Empecemos a desarrollar la matriz FODA
                🚀.</p>
        </section>

        <form method="POST" action="{{ route('StoreGeneralInformation') }}">

            <section id="geninformation" class="my-8">
                <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2 mt-8  text-gray-900">
                    Información general de la institución
                </h1>

                <p class="text-gray-600 text-sm font-normal">
                    Por favor aquí registra la información general de tu empresa.
                </p>
                <x-inputinfo>
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

                <div class="form-group">
                    <label for="project_id">Proyecto</label>
                    <select class="form-control selector" name="project_id" id="project_id">
                        <option value=""
                            class="opcionMuestra form-control 
                        bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block  
                        appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 
                        rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                            Seleccione un proyecto</option>
                        @foreach ($projects as $project)
                            <option {{ old('project_id') == $project->id ? 'selected' : '' }} value="{{ $project->id }}">
                                {{ $project->name }}</option>
                        @endforeach
                    </select>
                </div>

                <x-btninput class="bg-verde-action  mb-8">
                    Guardar información general
                </x-btninput>

            </section>

            @if (session('status'))
                <x-alert>
                    {{ session('status') }}
                </x-alert>
            @endif

            @csrf
        </form>


    </div>

@endsection
