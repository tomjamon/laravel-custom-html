<input
    type="checkbox"
    class="checkbox"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
    {{ old($options['name']) ? 'checked' : '' }}
/>
<label for="{{$options['name']}}" class="text-grey font-bold text-sm">
    @if (isset($options['indication']))
        {{$options['indication']}}
    @endif
</label>
