@extends('layouts.app')

@section('title', 'Lista de Motocicletas')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fas fa-motorcycle"></i> Lista de Motocicletas
            </h1>

            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                </ol>
            </nav>
            
            <div class="d-flex justify-content-center">
                <a href="{{ url('motorcycles/create') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    Agregar
                </a>
            </div>

            <table class="table table-striped my-5">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Cilindraje</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motorcycles as $motorcycle)
                    <tr>
                        <td>{{ $motorcycle->nameMotorcycle }}</td>
                        <td>
                            <img src="{{ $motorcycle->brand->image }}" alt="" width="40">
                        </td>
                        <td>{{ $motorcycle->cc }} CC</td>
                        <td>
                            <a href="{{ url('motorcycles/'.$motorcycle->id) }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{ url('motorcycles/'.$motorcycle->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-pen"></i>
                            </a>
                            <form action="{{ url('motorcycles/'.$motorcycle->id) }}" method="POST" class="d-inline">
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