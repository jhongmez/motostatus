@extends('layouts.app')

@section('title', 'Consultar Llanta')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fab fa-empire"></i>  Consultar Llanta
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('tires') }}">Llantas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fab fa-empire"></i> 
                        Consultar Llanta
                    </li>
                </ol>
            </nav>

            <table class="table table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $tire->name }}</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>{{ $tire->description }}</td>
                </tr>
                <tr>
                    <th>Active:</th>
                    <td>
                        @if ($tire->activo == 1)
                            Activo <i class="fas fa-check-circle"></i>
                        @else
                            Inactivo <i class="fas fa-window-close"></i>
                        @endif
                    </td>
                </tr>
            </table>

        </div>
    </div>

@endsection