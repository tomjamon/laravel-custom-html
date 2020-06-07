<textarea
    @foreach($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
    class="@if ($hasError) border-red @else border-grey-lighter @endif appearance-none block w-full bg-grey-lighter text-grey-400 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-grey-darker"
>{{$value}}</textarea>
