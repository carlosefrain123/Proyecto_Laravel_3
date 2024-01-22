{{-- TODO: Se copia lo que está en la documentación "https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage" --}}
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-left"><b>Limpio Be</b> <img src="{{asset('img/logoLimpioBe.png')}}" width="50" height="50" alt=""></h1>
        </div>
        <div class="col-6">
            <h1 class="text-right"><b>{{now()->format('d/m/y')}}</b></h1>
        </div>
    </div>
</div>
@stop

@section('content')
    <div class="text-center">
        <img src="{{Auth::user()->photo?asset('storage/'.Auth::user()->photo):asset('img/sfpr.jpg')}}" width="250"  height="250" class="rounded-circle">
    </div>
    <br>
    <h5 class="text-center">¡Hola! <b>{{ Auth::user()->name}}</b> desde aquí podras administrar los productos</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Gestionar horario</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/panel.png')}}" width="50" height="50" alt="">
                            <a href="#" class="btn btn-primary">Ir al panel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Gestionar Productos</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/citas.png')}}" width="50" height="50" alt="">
                            <a href="#" class="btn btn-primary">Ir a citas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Gestionar Control</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/control.png')}}" width="50" height="50" alt="">
                            <a href="#" class="btn btn-primary">Ir a control</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
