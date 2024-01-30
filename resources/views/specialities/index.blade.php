{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h2 class="text-center"><b>ESPECIALIDADES</b></h2>
@stop

@section('content')
    @if(session('success-create'))
    <div class="alert alert-primary text-center">
        {{session('success-create')}}
    </div>
    @elseif(session('success-update'))
    <div class="alert alert-success text-center">
        {{session('success-update')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('specialities.create')}}" class="btn btn-primary btn-sm mb-2"><b>Agregar Especialidad</b></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('specialities.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                <input type="text" name="filterValue" placeholder="Buscar por nombre de especialidad" class="form-control rounded border-primary text-secondary">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-info"><b>Buscar</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                                <a href="{{route('specialities.edit',$speciality)}}" class="btn btn-primary btn-sm mb-2">Editar</a>
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
                {{$specialities->appends(["filterValue"=>$filterValue])->links()}}
            </div>
        </div>
    </div>
@stop

