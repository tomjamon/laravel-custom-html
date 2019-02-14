<div class="relative">
    <select
        @foreach ($selectAttributes as $optionName => $optionValue)
            {{$optionName}}="{{$optionValue}}"
        @endforeach
            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
        {!! $list !!}
    </select>
    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
        </svg>
    </div>
</div>