<input type="submit" class="btn btn-primary"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
/>

