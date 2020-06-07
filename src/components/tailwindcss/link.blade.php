<a class="no-underline text-center shadow bg-indigo-300 hover:bg-indigo-500 hover:no-underline hover:shadow-md focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 mb-3 rounded"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
>
    {!! $value !!}
</a>


