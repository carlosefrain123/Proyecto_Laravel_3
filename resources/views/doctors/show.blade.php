@extends('adminlte::page')

@section('title', 'Ver Doctor')

@section('content_header')
<div class="card">
    <div class="card-body">
        <table class="table table-striped table-sm">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especialidades</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Foto</th>
                </tr>
            </thead>
            {{-- {{$specialities}} --}}
            <tbody class="text-center">
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>
                        @foreach ($specialities as $speciality)
                            {{ $speciality->name }}
                            {{--Sirve, para ver si tiene datos
                                {{ $specialities }} --}}
                            @if (!$loop->last)
                                {{ ', ' }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>
                        <button type="button" class="no-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="img-boton">
                                @if ($doctor->photo == NULL)
                                <img src="{{ asset('img/sfpr.jpg') }}" alt="Foto del Doctor" class="img-fluid img-boton">
                                @else
                                    <img src="{{ asset('storage/'.$doctor->photo) }}" alt="Foto del Doctor" class="img-fluid img-boton">
                                @endif
                            </div>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="text-center">
            <a href="{{route('doctors.index')}}" class="btn btn-success">Volver</a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Foto del Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    @if ($doctor->photo == NULL)
                        <img src="{{ asset('img/sfpr.jpg') }}" alt="Foto del Doctor" class="img-fluid">
                    @else
                        <img src="{{ asset('storage/'.$doctor->photo) }}" alt="Foto del Doctor" class="img-fluid">
                    @endif
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/photo/photo.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop
