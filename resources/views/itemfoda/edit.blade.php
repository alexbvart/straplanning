@extends('layouts.app')

@section('content')
    @php


    @endphp

    <div class=" container mx-auto px-4 sm:px-12">

        <section id="foda" class="my-24">
            <h1 class="title-font font-bold sm:text-4xl text-3xl mb-2   text-gray-900">
                Actualiza los datos del elemento foda
            </h1>


            {{-- <select class="form-control selector" name="project_id" id="project_id">
                <option {{ old('project_id') == $project->id ? 'selected' : '' }} value="{{ $project->id }}">
                    {{ $project->name }}
                </option>
            </select> --}}

            <div class="interno">

                <section class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">

                    <x-cardinput class="bg-celeste lg:w-1/3">
                        <form method="POST" action="{{ route('foda.update', $itemfoda) }}" id="addFortalezas">
                            @method('PUT')
                            @csrf
                            <x-slot name="title">
                                @if ($itemfoda->tipoitem_id == 1)
                                    Fortaleza
                                @endif
                                @if ($itemfoda->tipoitem_id == 2)
                                    Oportunidad
                                @endif
                                @if ($itemfoda->tipoitem_id == 3)
                                    Debilidad
                                @endif
                                @if ($itemfoda->tipoitem_id == 4)
                                    Amenaza
                                @endif
                                Elemento foda
                            </x-slot>
                            <x-slot name="color">
                                bg-celeste-action
                            </x-slot>


                            <textarea cols="30" rows="3" name="description"
                                class="description rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
                                placeholder="Message">{{ old('description', $itemfoda->description) }} </textarea>

                            <input type="hidden" value="{{ $itemfoda->project_id }}" name="project_id">

                            <div class="form-group my-4">
                                <label for="project_id">Tipo de Item foda</label>
                                <select class="form-control selector" name="tipoitem_id" id="project_id">
                                    <option value="{{ $itemfoda->tipoitem_id }}" class="opcionMuestra form-control ">
                                        {{ $itemfoda->tipoitem_id }} Fortaleza
                                    </option>
                                    <option  value="1"> Fortaleza </option>
                                    <option  value="2"> Oportunidad </option>
                                    <option  value="3"> Debilidad </option>
                                    <option  value="4"> Amenaza </option>
                                </select>
                            </div>

                            <x-btninput class="bg-celeste-action">
                                Agregar a la lista
                            </x-btninput>

                        </form>
                    </x-cardinput>

                </section>




            </div>



        </section>
    </div>
    <script>
        $(document).ready(function() {
            console.log('Hello desde js');
            console.log('jQuery is working');
        });

    </script>

@endsection
