<div 
    {{$attributes->merge(['class'=>'w-full  p-6 border-t border-b lg:border-t-0 lg:border-b-0 sm:border-l sm:border-r border-gray-300'])}}
>
    {{-- lg:w-1/2 --}}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                    <div class="overflow-x-auto">

                        <table class="table-auto border-collapse w-full">
                            <thead>

                                <tr class="rounded-lg text-sm font-medium text-gray-700 text-left"
                                    style="font-size: 0.9674rem">
                                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">
                                        {{$title}}
                                    </th>
                                    @if ($isEditable)
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
                                    <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>                                        
                                    @endif

                                </tr>

                            </thead>
                            <tbody class="text-sm font-normal text-gray-700">

                                {{$slot}}


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>