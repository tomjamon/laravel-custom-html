<!-- Size -->
<div class="w-full px-3 mb-6 md:mb-0 {{$groupClass}}">
    <!-- Label -->
    @if ($label != null)
        <label class="@if ($hasError) text-red @else  text-grey-darker @endif block uppercase tracking-wide text-xs font-bold mt-3 mb-1" for="{{$title}}">{{$label}}</label>
    @endif
    <!-- Input -->
    {!! $input !!}
    <!-- Error -->
    @if ($message != null)
        <!-- Ex : Please fill out this field. -->
        <p @if ($hasError) role="alert" @endif class="@if ($hasError) text-red @else text-grey-dark @endif text-xs italic">{{$message}}</p>
    @endif
</div>

