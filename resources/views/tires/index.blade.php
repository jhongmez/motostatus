@extends('layouts.app')

@section('title', 'Lista de Llantas')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fab fa-empire"></i> Lista de Llantas
            </h1>

            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                </ol>
            </nav>
            
            <div class="d-flex justify-content-center">
                <a href="{{ url('tires/create') }}" class="btn btn-success">
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
                    @foreach ($tires as $tire)
                    <tr>
                        <td>{{ $tire->name }}</td>
                        <td>{{ $tire->description }}</td>
                        <td>
                            <a href="{{ url('tires/'.$tire->id) }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{ url('tires/'.$tire->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-pen"></i>
                            </a>
                            <form action="{{ url('tires/'.$tire->id) }}" method="POST" class="d-inline">
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
            <div class="d-flex justify-content-center">
                {{ $tires->links() }}
            </div>
        </div>
    </div>

@endsection