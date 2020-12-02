<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Inter: wght @ 500 & display = swap" rel="hoja de estilo">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Inter', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }


        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">





        <!-- component -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-6">


                <!-- Version resposive celular -->

                <div class="p-4 flex flex-row items-center justify-between md:justify-between">
                    <!-- top bar left -->
                    <ul class="flex items-center">
                        <!-- add button -->
                        <li class="h-6 w-6">
                            <img class="h-full w-full mx-auto" src="{{asset('svg/lupa.svg')}}" alt="svelte logo" />
                        </li>
                    </ul>

                    <ul class="flex items-center  md:ml-24">
                        <!-- add button -->
                        <li>
                            <img src="{{asset('svg/straplaing.svg')}}" alt="logo de straplanning">
                        </li>
                    </ul>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}"
                    class="flex-col  md:pb-0 hidden md:flex md:justify-end md:flex-row">


                    @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}"
                            class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >
                            Home
                        </a>
                        @else
                        <a href="{{ route('login') }}"
                        class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >
                            Entrar
                        </a>
            
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >
                        Resgistrarme
                        </a>    
                        @endif
                        @endauth
                    @endif





                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class=" flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">

                            <!-- <img class="h-8 w-8 rounded-full mx-auto"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                alt="profile woman" /> -->

                            <span>Name</span>


                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Link #1</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Link #2</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Link #3</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


        <div class="flex bg-white" style="height:600px;">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">
                        Crea el <span class="text-indigo-600">plan estratégico</span> de tu empresa o startup en unos
                        minutos
                    </h2>
                    <p class="mt-2 text-sm text-gray-800 md:text-base">El proceso es muy rápido, anímate 😀.</p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                            href="#">Pruébalo gratis</a>
                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                            href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover"
                    style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>

    </div>



    <!-- devs -->
    <!-- component -->
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>
    <div class="">
<!-- 
        <h1>Equipo de desarollo</h1> -->
        
        <div class="flex-wrap min-w-screen min-h-screen bg-gray-200 flex   items-center justify-center px-5 py-5">
            <div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 400px">
                <div class="w-full flex mb-4">
                    <div class="overflow-hidden rounded-full w-12 h-12">
                        <img src="https://lh3.googleusercontent.com/fife/ABSRlIrggnXJkit-LIcjtuBn96QKMjdY5tcyP-Ty1pB1Y2Lz8HS42Sm4H4ZDytTQn6AhwoLQiTUCpOTQOT3o6aYHqbP9SmhMygvWMshmKDV44i7mJ6ljbsHHj059sx-a_qDHOpx4evaizANjL8H3sU6xOVSJ0a9nCx6LVkIZCj-8RFoP_A2GI_-By3tlYddBa2oVM3KP5grZLq7DF8h0rKoIpLhvyzykwu7tPbGFRYKtpR6niPrWllSxoQoQq4DAjf7ZmwfkdJY_eG-pt_zMBflFU57mD_G6dQ3KRSKw3W873h3pl5RkX5H1J7jcVxQhhUzT7mZpkXtMhxj3btWeSgK-MlsdlQtapTZMc1DHqABwYZtOAN-yXEwNLtkyQnXTC8sWkV8B4KuD2tTD-UMvpzQVXNW5IVRmPPVqcHQ0qmFYNKlNEAAMmRaF81pXd1Y7Q6H8BpU0e93JDwYalCfKQSCdDoWpb5zRRauZvO9YmKG5Je4_1nG8KaLLa_T2wiGzdcrqChntgiVf-uGugHP-4duURv0DkoDhOM9zWtRpGIOtuyEjKG96yGqZCSm4hKtGy9TivXKj8G_FvnNXybfrYlaMUm9VBxsWb0lR3WVCyJTdD3uHBMvt25BN0krQzAx-eVlT1-_QxgT4kYu_BkF6Ci-LxjqX5azphZ8i-iAMZFxbRg0vjvHmGO13gvHDjm2dyBdUYdt83tuN6UvCpp6jKXzF2g_14IOUZgWrU89PQrMRQfEPDWc=s83-c"
                             alt="Foto de perfil de Alfonso Alexander Briones Ventura">
                    </div>
                    <div class="flex-grow pl-3">
                        <h6 class="font-bold text-md">Alex Briones</h6>
                        <p class="text-xs text-gray-600">@alexbvart</p>
                    </div>
                    <div class="w-12 text-right">
                        <img 
                            src="{{asset('svg/github.svg')}}" 
                            alt="icono de github"
                            class="w-8 h-8"
                        >
                    </div>
                </div>
                <div class="w-full mb-4">
                    <p class="text-sm">🗡️ Estudiante de Ingenieria de Sistemas 🦄 desarrollador Frontend & Diseñador UX/UI, geek y amante de la tencologia 😎. </p>
                </div>
                <div class="w-full">
                    <p class="text-xs text-gray-500 text-right">Oct 15th 8:33pm</p>
                </div>
            </div>
            <div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 400px">
                <div class="w-full flex mb-4">
                    <div class="overflow-hidden rounded-full w-12 h-12">
                        <img src="https://lh3.googleusercontent.com/fife/ABSRlIrIKXGB-SXqHMeW2epIM2QAKCXEh1XhEgjmNnVnoZlXG-XNsWVvWTY4BrxtVPfXs0gOeiB_OIDsncmMNh-x_IWCvpu2bzSJofoP_hf6hoICXeRhJZlc6CCmoxcrW6eA-Kx0-uJCNV-tHqTDowZ3F1omo7bT4EGrZqPBNypxwVB-B2xj54QhKZHGh0Lfbc25FPTS6evp0aAx7lLKZG1ndBZNSRy1rrWHGLHzBrLEv78k1IwwJKj-xa5UI_0HIuuiYu1lwbuHJpbuxIzxo8dvM9dgcGEIGLpmMhPPee_2v9IFTTUqdG-M6vAa3YT5CcV1uLbPdjVqJPOLzn7uk8DYdDBG2RNeT-vbg3XzLHRs-RNyqy3iLndM6-AEdm41YZwslpzW9HEB4vBYOYNsevi2sdKAy1umleg32G8nwwPmI6Og_jtyRtIFQw7AjnJsEhV-5lUxwss5b5nmCsmg7BtK3hgVhfxlrg_RX7IxzhOkbC8FAZO8VnXv7cMC3nwAu9XMAGA5n0-KXYw7euMMeqMu_mcDAbxyaVw3m1wfugTvDXZ77mzLt9jYDVb5N3FAOxQSA5rbthiZJreXL0gND_Mm9FcSjX9swNP5VFX2NZPuLl4MBBEePEElTmjfvG7DwnkgQUtTgcySe4dWeIqoqaju2MfmBHEqxUigMCddrcpzuYmMZd6knW5v-YrqZh5jWuCB2PuZchZ1PSuAUbNIHHgNtGlE6LeEY3QLpkOzXgq4=s83-c"
                            alt="Foto de perfil de NURI VICTORIA TASILLA UCEDA">
                    </div>
                    <div class="flex-grow pl-3">
                        <h6 class="font-bold text-md">Nuri Tasilla</h6>
                        <p class="text-xs text-gray-600">@NuriTasilla</p>
                    </div>
                    <div class="w-12 text-right">
                        <img 
                            src="{{asset('svg/github.svg')}}" 
                            alt="icono de github"
                            class="w-8 h-8"
                        >
                    </div>
                </div>
                <div class="w-full mb-4">
                    <p class="text-sm">Estudiante de Ingenieria de Sistemas, amante de los animales 🦮 y la vida al aire libre 💚.</p>
                </div>
                <div class="w-full">
                    <p class="text-xs text-gray-500 text-right">Oct 15th 8:33pm</p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>