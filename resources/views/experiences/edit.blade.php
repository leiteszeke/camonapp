@extends('layouts.basic')

@section('content')
    <form>
        <label>Titulo</label>
        <input type="text" />
        <label>Descripcion</label>
        <textarea></textarea>
        <fieldset>
            <legend>Skybox</legend>
            <input type="file" />
            <input type="text" />
        </fieldset>
        <fieldset>
            <legend>Piso</legend>
            <input type="file" />
            <input type="text" />
        </fieldset>
        <fieldset>
            <legend>Objetos 3D</legend>
            <input type="file" />
            <input type="text" />
        </fieldset>
        <button>Guardar</button>
    </form>
@endsection