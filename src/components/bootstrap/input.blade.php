<input
    class="@if ($hasError) is-invalid @endif form-control"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
/>
