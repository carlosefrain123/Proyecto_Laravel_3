{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Modificar Doctor')

@section('content_header')
    <h2 class="text-center"><b>Modificar Doctor</b></h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('doctors.update',$doctor)}}" method="post">
                @csrf
                @method('PUT'){{-- Para editar datos --}}
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Nombre</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name',$doctor->name)}}">
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
                        <select name="specialities[]" id="specialities"  class="form-control js-example-basic-multiple" multiple="multiple">
                            @foreach ($specialities as $speciality)
                                <option value="{{$speciality->id}}" {{in_array($speciality->id,old('specialities',[]))?'selected':''}}>{{$speciality->name}}</option>
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
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email',$doctor->email)}}">
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
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address',$doctor->address)}}">
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
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone',$doctor->phone)}}">
                        @error('phone')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Crear Doctor" class="btn btn-primary">
                    <a href="{{route('doctors.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(()=>{});
        $('#specialities').val(@json($ids_specialities));
    </script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            theme: "classic"
        });
    });
    </script>
@stop



