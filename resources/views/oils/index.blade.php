@extends('layouts.app')

@section('title', 'Lista de Aceites')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fas fa-tint"></i> Lista de Aceites
            </h1>

            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                </ol>
            </nav>
            
            <div class="d-flex justify-content-center">
                <a href="{{ url('oils/create') }}" class="btn btn-success">
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
                    @foreach ($oils as $oil)
                    <tr>
                        <td>{{ $oil->name }}</td>
                        <td>{{ $oil->description }}</td>
                        <td>
                            <a href="{{ url('oils/'.$oil->id) }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{ url('oils/'.$oil->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-pen"></i>
                            </a>
                            <form action="{{ url('oils/'.$oil->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-link btn-delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection