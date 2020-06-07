<button
    class="text-center shadow bg-indigo-400 hover:bg-indigo-600 hover:shadow-md focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 mb-3 rounded"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
>
    {!! $value !!}
</button>


