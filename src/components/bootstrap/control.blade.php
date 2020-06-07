<!-- Size -->
<div class="form-group row {{$groupClass}}">
    <!-- Label -->
    @if ($label != null)
        {!! $label !!}
    @else
        <div class="col-md-4 col-form-label text-md-right"></div>
    @endif
    <!-- Input -->
    <div class="col-md-6">
        {!! $input !!}
        <!-- Error -->
        @if ($message != null)
            <span @if ($hasError) role="alert" @endif class="@if ($hasError) invalid-feedback @else feedback @endif">
                <strong>{{ $message }}</strong>
            </span>
        @endif
    </div>
</div>

