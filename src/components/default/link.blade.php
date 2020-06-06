<a class=""
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
>
    {!! $value !!}
</a>


