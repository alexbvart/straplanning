
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Straplanning/PDF') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@php
        /* $general = $project->info->mission; var_dump($general); */
/*     $objs = $project->info->objetivos; */
    $items =$project->itemfodas;
@endphp


<table class="">

    <tr class="rounded-lg text-sm font-medium text-gray-700 text-left"
        style="font-size: 0.9674rem">
        <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">
            Matriz foda de {{$project->name}}
        </th>
        <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
        <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>                                        
    </tr>
  
    <tr class="hover:bg-gray-100  border-gray-200">

        <td class="px-4 py-4">
           blanco
        </td>

        <td class="bg-grey-light bg-naranja">    

            @if ($items->count())

                    <h3 class="text-sm">
                        Oportunidades de {{$project->name}}
                    </h3>
                <ol class="text-sm">
                @foreach ( $items as $item)
    
                    @if ($item->tipoitem_id == 2)
                    <li class="bg-white  rounded my-2 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}}
                    </li>
                    @endif
    
                @endforeach
                </ol> 
            @else
                no hay oportunidades :D
            @endif

        </td>
        <td class="bg-grey-light bg-rosa">
            @if ($items->count())
                    <h3 class="text-sm">
                        Amenazas de {{$project->name}}
                    </h3>
                <div class="text-sm ">
                @foreach ( $items as $item)
    
                    @if ($item->tipoitem_id == 4)
                    <div class="bg-white  rounded my-2 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}}
                    </div>
                    @endif
    
                @endforeach 
                </div>
            @else
                nadie nos amenaza, nosotros somos la amennaza :D
            @endif
        </td>
    </tr>
    <tr class="hover:bg-gray-100  border-gray-200">
        <td class="bg-grey-light bg-celeste">
                @if ($items->count())

                            <h3 class="text-sm">
                                Fortalezas de {{$project->name}}
                            </h3>

                        
                        <ol class="text-sm ">
                        @foreach ( $items as $item)
        
                            @if ($item->tipoitem_id == 1)
                            <li class="bg-white  rounded my-2 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                {{$item->description}} {{-- || {{$item->tipoitem_id}} <br> --}}
                            </li>
                            @endif
        
                        @endforeach     
                        </ol>
                    </div>
                @else
                    no hay fortalezas :D
                @endif
        </td>
        <td class="px-4 py-4">
            FO   
        </td>
        <td class="px-4 py-4">
            FA
        </td>
    </tr>
    <tr class="hover:bg-gray-100  border-gray-200">
        <td class="bg-grey-light bg-amarillo">
            @if ($items->count())

                    <h3 class="text-sm">
                        Debilidades de {{$project->name}}
                    </h3>

                <ol class="text-sm mt-2">
                @foreach ( $items as $item)
    
                    @if ($item->tipoitem_id == 3)
                    <li class="bg-white  rounded my-2 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        {{$item->description}}
                    </li>
                    @endif
    
                @endforeach  
                </ol>
            @else
                no hay debilidades, somos muy fuertes :D
            @endif
        </td>
        <td class="px-4 py-4">
            DO   
        </td>
        <td class="px-4 py-4">
            DA
        </td>
    </tr>
  </table>

</body>
</html>