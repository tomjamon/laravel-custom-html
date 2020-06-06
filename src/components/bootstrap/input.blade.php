<input
    class="@if ($hasError) border-red @else border-grey-lighter @endif form-group"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
/>
