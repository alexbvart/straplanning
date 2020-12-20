<div class="my-4 ">
    <slot for="email" class="block text-gray-600 text-sm font-medium mb-2">
        {{$label}}
    </slot>

    <input 
        id="{{$slot}}"
        class="form-control 
            bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block  
            appearance-none rounded-none  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 
            rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
        type="text" 
        name="{{$slot}}" 
        value="{{ old('slot') }}" 
        required autocomplete="{{$slot}}" 
        autofocus
        placeholder=""
    >

</div>
