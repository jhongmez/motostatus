@extends('layouts.app')

@section('title', 'Crear SOAT')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-hospital-user"></i> Crear SOAT
            </h1>
            <hr>
              
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('oils') }}">SOAT</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-hospital-user"></i>
                        Crear SOAT
                    </li>
                </ol>
            </nav>

            <form method="POST" action="{{ route('soats.store') }}">
                @csrf

                <div class="form-group">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('general.name-soat')" autofocus>
     
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" placeholder="@lang('general.description')" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group mb-0">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-link btn-block">
                            {{ __('general.create-soat') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection