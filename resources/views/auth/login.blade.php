@extends('layouts.app')

@section('content')
    <div class="container mx-auto min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto " src="{{ asset('svg/straplaing.svg') }}" alt="logo de straplanning">
{{--                 <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    {{ __('Login') }}
                </h2> --}}
                <p class="text-gray-600 pt-2 text-center pb-8">Ingresa tus datos para iniciar sesion 🙂</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="">

                        <label for="email"
                            class="block text-gray-600 text-sm font-medium mb-2">{{ __('Correo electronico') }}</label>

                        <div class="">
                            <input id="email"
                                class="form-control @error('email') is-invalid @enderror
                                            bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                            appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="alex@straplanning.com">

                            @error('email')
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

                        <label for="password"
                            class="block text-gray-600 text-sm font-medium mb-2">{{ __('Contraseña') }}</label>

                        <div class="">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror
                                            bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full  
                                            appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                name="password" required autocomplete="current-password" placeholder="********">

                            @error('password')
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

                    <div class="flex my-4">
                        <input class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" type="checkbox"
                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="ml-2 block text-sm text-gray-900" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: lock-closed -->
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
                {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}

            </div>
        </div>
    </div>
@endsection
