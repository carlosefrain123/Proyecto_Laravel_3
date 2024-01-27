{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h2 class="text-center"><b>ESPECIALIDADES</b></h2>
@stop

@section('content')
    <div class="card-header">
        <a href="#" class="btn btn-primary btn-sm mb-2"><b>Agregar Especialidad</b></a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-sm">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre de Especialidad</th>
                    <th class="text-center" colspan="2">Acciones</th>
                </tr>
            </thead>
            {{-- {{$specialities}} --}}
            <tbody class="text-center">
                @foreach ($specialities as $speciality)
                    <tr>
                        <td><b>{{$speciality->id}}</b></td>
                        <td>{{$speciality->name}}</td>
                        <td width="5px">
                            <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                        </td>
                        <td width="5px">
                            <a href="#" class="btn btn-danger btn-sm mb-2">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="text-center">
            {{$specialities->links()}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

