{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Agregar Doctor')

@section('content_header')
    <h2 class="text-center"><b>Agregar Doctor</b></h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('specialities.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Nombre</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="specialities" class="col-sm-1 col-form-label">Especialidades:</label>
                    <div class="col-sm-11">
                        <select name="specialities" class="form-control">
                            @foreach ($specialities as $speciality)
                                <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                            @endforeach
                        </select>
                        @error('specialities')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-1 col-form-label">Correo:</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-1 col-form-label">Dirección:</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
                        @error('address')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-1 col-form-label">Celular:</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                        @error('phone')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="crear especialidad" class="btn btn-primary">
                    <a href="{{route('doctors.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop




