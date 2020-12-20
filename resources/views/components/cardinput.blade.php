<div 
    {{$attributes->merge(['class'=>'w-full lg:w-1/2 p-6 '])}}
> 

    <h2 class="text-lg text-gray-800 font-bold mt-5 mb-1">
        {{$title}}
    </h2>
    <p class="text-gray-600 text-sm font-normal">
        {{$slot}}
    </p>

    <textarea cols="30" rows="2"
        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-xl w-full mt-3"
        placeholder="Message">

    </textarea >

    <x-btninput class="{{$color}}">
        Agregar a la lista
    </x-btninput>
</div>