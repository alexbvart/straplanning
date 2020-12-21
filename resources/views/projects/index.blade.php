@extends('layouts.app')

@section('content')



    <section class="px-4 sm:px-6 lg:px-5 xl:px-6 py-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


        <header class="flex items-center justify-between">
            <h2 class="text-lg leading-6 font-medium text-black">Projects</h2>
            <a href="{{ route('projects.create') }}"
                class="hover:bg-purple-200 hover:text-purple-800 
                                        group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">

                <svg class="group-hover:text-purple-600 text-purple-500 mr-2" width="12" height="20" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
                </svg>
                Nuevo
            </a>
        </header>


        <section class="text-gray-700 body-font">
            <div class="mx-auto">

                <ul class="flex flex-wrap -m-4">
                    @foreach ($projects as $project)
                        <li class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                            <div class="h-full  p-8 rounded-lg overflow-hidden 
                          hover:bg-purple-50 hover:border-transparent hover:shadow-lg group block  border border-gray-300
                          ">
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                                    {{ $project->name }}
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    {{ $project->description }}
                                </p>
                                <a href="{{ route('project', $project) }} "
                                    class="text-indigo-500 inline-flex items-center md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <div class="text-center mt-2 leading-none flex justify-center  bottom-0 left-0 w-full py-4">
                                    <a href="{{ route('projects.edit', $project) }}"
                                        class="text-xs text-center w-full bg-indigo-100 text-indigo-700 rounded font-medium p-3 mr-3">
                                        Editar
                                    </a>
                                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            class="text-xs text-center w-full  bg-red-200 text-red-500 rounded font-medium p-3"
                                            type="submit" value="Eliminar"
                                            onclick="return confirm('¿Estas seguro que deseas eliminar?')">
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    {{-- <li class="hover:bg-purple-200 hover:shadow-lg flex rounded-lg">
                        <a href="{{ route('projects.create') }}"
                            class="hover:border-transparent hover:shadow-xs w-full flex items-center justify-center rounded-lg border-2 border-dashed border-gray-200 text-sm font-medium py-4">
                            Crear nuevo proyecto
                        </a>
                    </li> --}}
                </ul>
        </section>


        {{-- <div class="flex">
            <button
                class="border border-teal-500 text-teal-500 block rounded-sm font-bold py-4 px-6 mr-2 flex items-center hover:bg-teal-500 hover:text-white">
                <svg class="h-5 w-5 mr-2 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512"
                    style="enable-background:new -49 141 512 512;" xml:space="preserve">
                    <path id="XMLID_10_"
                        d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z">
                    </path>
                </svg>
                Previous page
            </button>

            <button
                class="border border-teal-500 bg-teal-500 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex items-center">
                Next page
                <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512"
                    style="enable-background:new -49 141 512 512;" xml:space="preserve">
                    <path id="XMLID_11_"
                        d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                                    l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                                    c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z" />
                </svg>
            </button>
        </div>

        --}}
{!! $projects->links() !!} 
    </section>



@endsection




{{-- <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
    <a href="{{ route('projects.edit', $project) }}"
        class="text-xs text-center w-full bg-indigo-100 text-indigo-700 rounded font-medium p-3 lg:mr-3">
        Editar
    </a>
    <a href="{{ route('projects.destroy', $project) }}"
        class="mt-4 text-center w-full lg:mt-0 text-xs bg-red-200 text-red-500 rounded font-medium p-3">
        Eliminar
    </a>

</div>
--}}
