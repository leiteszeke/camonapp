@extends('layouts.basic')

@section('content')
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th colspan="4" class="text-right">
                        <a href="{{ URL::to('/experiences/create') }}" class="btn btn-sm btn-primary">Crear Experiencia</a>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <td scope="row">{{ $experience->id }}</td>
                        <td>{{ $experience->title }}</td>
                        <td>{{ $experience->description }}</td>
                        <td class="text-right">
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection