@extends('layouts.app')

@section('content')



<section class="px-4 sm:px-6 lg:px-4 xl:px-6 pt-4 pb-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


  <header class="flex items-center justify-between">
      <h2 class="text-lg leading-6 font-medium text-black">Projects</h2>
      <button
          class="hover:bg-purple-200 hover:text-purple-800 
                      group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">

          <svg class="group-hover:text-purple-600 text-purple-500 mr-2" width="12" height="20" fill="currentColor">
              <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
          </svg>
          Nuevo
      </button>
  </header>

  <form class="relative">
    <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
    </svg>
    <input class="focus:border-purple-500 focus:ring-1 focus:ring-purple-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10" type="text" aria-label="Filter projects" placeholder="Filter projects" />
  </form>

  <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4">

      @foreach ($projects as $project)
          <li x-for="item in items">

              <a href="{{ route('project', $project) }} " class=" hover:bg-purple-400 hover:border-transparent hover:shadow-lg 
                        group block rounded-lg p-4 border border-gray-300">

                  <dl class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-1 items-center">

                      <div>
                          <dt class="sr-only">Title</dt>
                          <dd class="group-hover:text-white leading-6 font-medium text-black">
                              {{ $project->name }}
                              {{-- {{ $project->user->name }}
                              --}}

                          </dd>
                      </div>

                      <div>
                          <dt class="sr-only">Category</dt>
                          <dd class="group-hover:text-light-blue-200 text-sm font-medium sm:mb-4 lg:mb-0 xl:mb-4">
                              {{ $project->description }}
                          </dd>
                      </div>

                  </dl>
              </a>
          </li>
      @endforeach



      <li class="hover:bg-purple-200 hover:shadow-lg flex rounded-lg">
          <a href="/new"
              class="hover:border-transparent hover:shadow-xs w-full flex items-center justify-center rounded-lg border-2 border-dashed border-gray-200 text-sm font-medium py-4">
              Crear nuevo proyecto
          </a>
      </li>


  </ul>
  {!! $projects->links() !!} 

</section>



@endsection
