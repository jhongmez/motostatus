@extends('layouts.app')

@section('title', 'Lista de CDA')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fas fa-screwdriver"></i> Lista de CDA
            </h1>

            <hr>
            
            <div class="d-flex justify-content-center">
                <a href="{{ url('mechanics/create') }}" class="btn btn-success">
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
                    @foreach ($mechanics as $mechanic)
                    <tr>
                        <td>{{ $mechanic->name }}</td>
                        <td>{{ $mechanic->description }}</td>
                        <td>
                            <a href="{{ url('mechanics/'.$mechanic->id) }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{ url('mechanics/'.$mechanic->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                <i class="fa fa-pen"></i>
                            </a>
                            <form action="{{ url('mechanics/'.$mechanic->id) }}" method="POST" class="d-inline">
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