<button
    class="btn btn-primary"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
>
    {!! $value !!}
</button>


