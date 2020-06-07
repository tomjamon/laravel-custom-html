<input
     type="checkbox"
     class="my-3 mr-2 leading-tight"
     @foreach ($options as $optionName => $optionValue)
         {{$optionName}}="{{$optionValue}}"
     @endforeach
/>
<label for="{{$options['name']}}" class="text-grey-400 font-bold text-sm">
    @if(isset($options['indication']))
        {{$options['indication']}}
    @endif
</label>
