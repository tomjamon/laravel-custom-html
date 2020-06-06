<input
     type="checkbox"
     class=""
     @foreach ($options as $optionName => $optionValue)
         {{$optionName}}="{{$optionValue}}"
     @endforeach
/>
<label for="{{$options['name']}}" class="">
    @if (isset($options['indication']))
        {{$options['indication']}}
    @endif
</label>
