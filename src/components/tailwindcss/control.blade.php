<!-- Size -->
<div class="w-full px-3 mb-6 md:mb-0 {{$groupClass}}">
    <!-- Label -->
    @if ($label != null)
        {!! $label !!}
    @else
        <!-- No label placeholder-->
    @endif

    <!-- Input -->
    {!! $input !!}
    <!-- Error -->
    @if ($message != null)
        <!-- Ex : Please fill out this field. -->
        <p @if ($hasError) role="alert" @endif class="@if ($hasError) text-red-400 @else text-grey-400 @endif text-xs italic">{{$message}}</p>
    @endif
</div>

