@extends('layouts.viewer')

@section('content')
    <a-scene>
        <a-assets>
            @if (isset($experience->skybox['image']))
                <img id="skybox" src="{{ $experience->skybox['image'] }}">
            @endif
            @if (isset($experience->floor['image']))
                <img id="floor" src="{{ $experience->floor['image'] }}">
            @endif
        </a-assets>

        <a-sky
            color="{{ $experience->skybox['color'] }}"
            src="#skybox"
        ></a-sky>

        <a-plane
            color="{{ $experience->floor['color'] }}"
            rotation="-90 0 0"
            src="#floor"
        ></a-plane>

        @if ($experience->objects['type'] === 'sphere')
            @php
                $service = new App\Services\ObjectService\Sphere();
                $service->setValues($experience->objects['props']);
                $tag = $service->generate();
            @endphp

            {!! $tag !!}
        @endif
    </a-scene>
@endsection