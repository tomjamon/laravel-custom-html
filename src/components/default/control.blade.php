<!-- Size -->
<div class="{{$groupClass}}">
    <!-- Label -->
    @if ($label != null)
        <label class="@if ($hasError) class-error @else class-regular @endif other-class" for="{{$title}}">
            {{$label}}
        </label>
    @endif
    <!-- Input -->
    {!! $input !!}
    <!-- Error -->
    @if ($message != null)
        <p @if ($hasError) role="alert" @endif class="@if ($hasError) class-error @else class-regular @endif other-class">{{$message}}</p>
    @endif
</div>

