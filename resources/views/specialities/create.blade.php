{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h2 class="text-center"><b>Agregar nueva especialidad</b></h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="#" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre de Especialidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="crear especialidad" class="btn btn-primary">
                    <a href="{{route('specialities.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop



