<div 
    {{$attributes->merge(['class'=>'w-full  p-6 '])}}
> {{-- lg:w-1/2 --}}

    <h2 class="text-2xl text-gray-800 font-extrabold mt-5 mb-1">
        {{$title}}
    </h2>
    <p class="text-gray-600 text-base font-normal">
        {{$slot}}
    </p>
{{-- 
    <textarea cols="30" rows="3"
        name="description"
        class="rounded-md border-solid border-gray-400 border-2 p-3 md:text-base w-full mt-3"
        placeholder="Message">
    </textarea >

    <x-btninput class="{{$color}}">
        Agregar a la lista
    </x-btninput> --}}
</div>