<textarea
    @foreach($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
    class="@if ($hasError) class-error @else class-regular @endif other-class"
>{{$value}}</textarea>
