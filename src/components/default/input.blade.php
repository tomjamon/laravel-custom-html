<input
    class="@if ($hasError) class-error @else class-regular @endif other-class block w-full bg-grey"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
/>
