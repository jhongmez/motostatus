@extends('layouts.app')

@section('title', 'Consultar Aceite')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-tint"></i> Consultar Aceite
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('oils') }}">Aceites</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-tint"></i>
                        Consultar Aceite
                    </li>
                </ol>
            </nav>

            <table class="table table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $oil->name }}</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>{{ $oil->description }}</td>
                </tr>
                <tr>
                    <th>Active:</th>
                    <td>
                        @if ($oil->activo == 1)
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