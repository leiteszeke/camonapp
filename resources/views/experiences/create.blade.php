@extends('layouts.basic')

@section('content')
    <form id="experienceForm" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label">Titulo</label>
            <input class="form-control-sm form-control" name="title" type="text" />
        </div>
        <div class="form-group">
            <label class="control-label">Descripcion</label>
            <textarea rows="5" name="description" class="form-control-sm form-control"></textarea>
        </div>

        <div class="form-inline margin-bottom">
            <div class="form-inline col-md-6 no-padding-left">Skybox</div>
            <div class="form-inline col-md-6 no-padding-left">Piso</div>
        </div>
        <div class="form-inline form-group">
            <div class="form-inline col-md-6 no-padding-left">
                <div class="form-group col-md-6 no-padding-left">
                    <div class="form-check form-check-inline margin-bottom">
                        <input class="form-check-input" type="radio" name="skybox_select" id="skybox_select_1" value="1">
                        <label class="form-check-label" for="skybox_select">Subir imagen</label>
                    </div>
                    <div class="custom-file">
                        <input disabled type="file" name="skybox[image]" class="custom-file-input" id="skybox[image]" lang="es">
                        <label class="custom-file-label form-control-sm" for="skybox[image]">Seleccionar Archivo</label>
                    </div>
                </div>
                <div class="form-group col-md-6 no-padding-left">
                    <div class="form-check form-check-inline margin-bottom">
                        <input class="form-check-input" type="radio" name="skybox_select" id="skybox_select_2" value="2">
                        <label class="form-check-label" for="skybox_select">Color Hexadecimal</label>
                    </div>
                    <input disabled type="text" name="skybox[color]" class="form-control" id="skybox_color" placeholder="#FFFFFF">
                </div>
            </div>

            <div class="form-inline col-md-6 no-padding-left">
                <div class="form-group col-md-6 no-padding-left">
                    <div class="form-check form-check-inline margin-bottom">
                        <input class="form-check-input" type="radio" name="floor_select" id="floor_select_1" value="1" />
                        <label class="form-check-label" for="floor_select">Subir imagen</label>
                    </div>
                    <div class="custom-file">
                        <input disabled type="file" name="floor[image]" class="custom-file-input" id="floor[image]" lang="es" />
                        <label class="custom-file-label" for="floor[image]">Seleccionar Archivo</label>
                    </div>
                </div>
                <div class="form-group col-md-6 no-padding-left">
                    <div class="form-check form-check-inline margin-bottom">
                        <input class="form-check-input" type="radio" name="floor_select" id="floor_select_2" value="2" />
                        <label class="form-check-label" for="floor_select">Color Hexadecimal</label>
                    </div>
                    <input disabled type="text" name="floor[color]" class="form-control" id="floor_color" placeholder="#FFFFFF" />
                </div>
            </div>
        </div>


        <div class="form-inline margin-bottom">
            <div class="form-inline col-md-12 no-padding-left">Objeto 3D</div>
        </div>
        <div class="form-inline form-group col-md-12 no-padding-left">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="objects[type]" id="object_select_1" value="sphere" />
                <label class="form-check-label" for="objects[type]">Esfera</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="objects[type]" id="object_select_2" value="box" />
                <label class="form-check-label" for="objects[type]">Caja</label>
            </div>
        </div>

        <div data-object data-is="sphere" class="hidden">
            @component('components.sphere') @endcomponent
        </div>

        <div class="form-inline margin-bottom">
            <div class="col-md-12 text-right no-padding-right">
                <button class="btn btn-sm btn-success">Crear</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/pages/experiences.js') }}"></script>
@endsection