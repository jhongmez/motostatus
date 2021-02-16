@extends('layouts.app')

@section('title', 'Consultar Usuario')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fa fa-search"></i> Consultar usuario
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">Usuarios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-search"></i>
                        Consultar usuario
                    </li>
                </ol>
            </nav>

            <table class="table table-striped">
                <tr>
                    <th>Nombre completo:</th>
                    <td>{{ $user->name }} {{ $user->surname }}</td>
                </tr>
                <tr>
                    <th>Correo electrónico:</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Rol:</th>
                    <td>{{ $user->role }}</td>
                </tr>
            </table>

        </div>
    </div>

@endsection