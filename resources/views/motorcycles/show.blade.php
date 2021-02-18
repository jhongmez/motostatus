@extends('layouts.app')

@section('title', 'Consultar Motocicleta')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-motorcycle"></i> Consultar Motocicleta
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('motorcycles') }}">Motocicletas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-motorcycle"></i>
                        Consultar Motocicleta
                    </li>
                </ol>
            </nav>

            <table class="table table-striped">
                <tr>
                    <th>Marca:</th>
                    <td>
                        <img src="{{ asset($motorcycle->brand->image) }}" width="40px">
                    </td>
                </tr>
                <tr>
                    <th>Nombre Moto:</th>
                    <td>{{ $motorcycle->nameMotorcycle }}</td>
                </tr>
                <tr>
                    <th>Cilindraje:</th>
                    <td>{{ $motorcycle->cc }}</td>
                </tr>
                <tr>
                    <th>Modelo:</th>
                    <td>{{ $motorcycle->model }}</td>
                </tr>
                <tr>
                    <th>SOAT:</th>
                    <td>{{ $motorcycle->soat->name }}</td>
                </tr>
                <tr>
                    <th>Fecha del SOAT:</th>
                    <td>{{ $motorcycle->soatDate }}</td>
                </tr>
                <tr>
                    <th>Impuesto:</th>
                    <td>
                        @if($motorcycle->taxes == 1)
                            <button class="btn btn-success">
                                SI
                            </button>
                        @else
                            <button class="btn btn-danger">
                                NO
                            </button>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Fecha impuesto:</th>
                    <td>
                       {{ $motorcycle->taxesDate }} 
                    </td>
                </tr>
                <tr>
                    <th>Tecnomecanico:</th>
                    <td>
                       {{ $motorcycle->mechanic->name }} 
                    </td>
                </tr>
                <tr>
                    <th>Fecha tecnomecanico:</th>
                    <td>
                       {{ $motorcycle->mechanicsDate }} 
                    </td>
                </tr>
                <tr>
                    <th>llantas:</th>
                    <td>
                       {{ $motorcycle->tire->name }} 
                    </td>
                </tr>
                <tr>
                    <th>Fecha de llantas:</th>
                    <td>
                       {{ $motorcycle->tiresDate }} 
                    </td>
                </tr>
                <tr>
                    <th>Frenos:</th>
                    <td>
                       {{ $motorcycle->brake->name }} 
                    </td>
                </tr>
                <tr>
                    <th>Fecha de frenos:</th>
                    <td>
                       {{ $motorcycle->brakesDate }} 
                    </td>
                </tr>
                <tr>
                    <th>Aceite:</th>
                    <td>
                       {{ $motorcycle->oil->name }} 
                    </td>
                </tr>
                <tr>
                    <th>Fecha de aceite:</th>
                    <td>
                       {{ $motorcycle->oilsDate }} 
                    </td>
                </tr>
            </table>

        </div>
    </div>

@endsection