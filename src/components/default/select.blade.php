<div class="">
    <select
        @foreach ($selectAttributes as $optionName => $optionValue)
            {{$optionName}}="{{$optionValue}}"
        @endforeach
            class="">
        {!! $list !!}
    </select>
</div>
