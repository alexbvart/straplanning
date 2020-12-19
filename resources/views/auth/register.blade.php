@extends('layouts.app')

@section('content')
<div class="container mx-auto min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto " src="{{ asset('svg/straplaing.svg') }}" alt="logo de straplanning">
            <p class="text-gray-600 pt-2 text-center pb-8">Parece que eres nuevo por aqui, registra algunos de tus datos y Bienvenido 🙂</p>

                {{-- <div class="card-header">{{ __('Register') }}</div> --}}


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="pt-4">
                            <label for="name" class="block text-gray-600 text-sm font-medium mb-2">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" 
                                class="form-control @error('name') is-invalid @enderror
                                    bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                    appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Nuri Tasilla">

                                @error('name')
                                <div class="w-full bg-red-400 text-white my-2">
                                    <div class="flex justify-between items-center container mx-auto py-2 px-6">
                                        <div class="flex">
                                            <svg viewBox="0 0 40 40" class="h-6 w-6 fill-current">
                                                <path
                                                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                                                </path>
                                            </svg>

                                            <p class="mx-3">{{ $message }}.</p>
                                        </div>
                                    </div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <label for="email" 
                            class="block text-gray-600 text-sm font-medium mb-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" 
                                class="form-control @error('email') is-invalid @enderror mb-2
                                bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="nuri@straplanning.com">

                                @error('email')
                                    <span class="text-red-500 pt-4 pb-8 font-extralight" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="form-control @error('password') is-invalid @enderror mb-2
                                bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                name="password" required autocomplete="new-password"
                                placeholder="********">

                                @error('password')
                                    <span class="text-red-500 pt-4 pb-8 font-extralight" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" 
                                class="form-control
                                bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                            appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm""
                                 name="password_confirmation" required autocomplete="new-password"
                                 placeholder="********">
                            </div>
                        </div>

                        <div class="pt-4">

                                <button type="submit" 
                                class=" py-2 mt-4 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
@endsection
