@extends('adminlte::page')

@section('title', 'Editar Especialidad')

@section('content_header')
    <h2 class="text-center"><b>Editar Especialidad</b></h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('specialities.update', $speciality) }}" method="post">
                @csrf
                @method('PUT') <!-- Agrega esta línea para indicar que es una solicitud PUT -->
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre de Especialidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $speciality->name }}">
                        @error('name')
                            <span class="text-danger">
                                <span>*{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Actualizar Especialidad" class="btn btn-primary">
                    <a href="{{ route('specialities.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop

