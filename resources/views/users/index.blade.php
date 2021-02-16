@extends('layouts.app')

@section('title', 'Lista de usuarios')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>
                <i class="fa fa-users"></i> Lista de usuarios
            </h1>
            <hr>
            <div class="d-flex justify-content-center">
                <a href="{{ url('users/create') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    Agregar
                </a>
            </div>
            <table class="table table-striped my-5">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">Nombre</th>
                        <th>Email</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="d-none d-sm-table-cell">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-motostatus-info">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-sm btn-motostatus-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <form action="{{ url('users/'.$user->id) }}" method="POST" class="d-inline">
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
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection