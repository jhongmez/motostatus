@extends('layouts.app')

@section('title', 'Consultar CDA')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-screwdriver"></i> Consultar CDA
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('mechanics') }}">CDA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-screwdriver"></i>
                        Consultar CDA
                    </li>
                </ol>
            </nav>

            <table class="table table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $mechanic->name }}</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>{{ $mechanic->description }}</td>
                </tr>
                <tr>
                    <th>Active:</th>
                    <td>
                        @if ($mechanic->activo == 1)
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