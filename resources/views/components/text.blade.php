@php
    $props = (new App\Services\ObjectService\Text())->get();
    $index = 0;
@endphp

<div class="form-row">
    @foreach ($props as $prop => $value)
        <div class="form-group col-md-3 col-sm-4 no-padding-left text-overflow">
            <label for="objects[props][{{ $prop }}]">{{ $prop }}</label>
            <input disabled class="form-control form-control-sm" type="text" name="objects[props][{{ $prop }}]" placeholder="{{ $value }}" />
        </div>
    @endforeach
</div>
