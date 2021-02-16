@extends('layouts.app')

@section('title', 'Lista de frenos')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fas fa-wrench"></i> Lista de frenos
            </h1>

            <hr>
            
            <div class="d-flex justify-content-center">
                <a href="{{ url('brakes/create') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    Agregar
                </a>
            </div>

            <table class="table table-striped my-5">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brakes as $brake)
                    <tr>
                        <td>{{ $brake->name }}</td>
                        <td>{{ $brake->description }}</td>
                        <td>
                            <a href="{{ url('brakes/'.$brake->id) }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{ url('brakes/'.$brake->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection