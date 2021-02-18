@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('motorcycles') }}" class="link-cards">
                            <i class="fas fa-motorcycle fa-3x"></i>
                            Motocicletas
                        </a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('users') }}" class="link-cards">
                            <i class="fa fa-users fa-3x"></i>
                            Usuarios
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('brands') }}" class="link-cards">
                            <i class="far fa-copyright fa-3x"></i>
                            Marcas
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('brakes') }}" class="link-cards">
                            <i class="fas fa-wrench fa-3x"></i>
                            Frenos
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('oils') }}" class="link-cards">
                            <i class="fas fa-tint fa-3x"></i>
                            Aceites
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('mechanics') }}" class="link-cards">
                            <i class="fas fa-screwdriver fa-3x"></i>
                            Tecnomecanico
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('soats') }}" class="link-cards">
                            <i class="fas fa-hospital-user fa-3x"></i>
                            Soat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card color-secondary card-home">
                    <div class="card-body">
                        <a href="{{ url('tires') }}" class="link-cards">
                            <i class="fab fa-empire fa-3x"></i>
                            Llantas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
