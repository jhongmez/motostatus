@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fa fa-user-plus"></i> Crear usuario
            </h1>
            <hr>
              
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">Usuarios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-user-plus"></i>
                        Crear usuario
                    </li>
                </ol>
            </nav>

            <form method="POST" action="{{ route('users.store') }}">
                @csrf

                <div class="form-group">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('general.name')" autofocus>
     
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" placeholder="@lang('general.surname')" autofocus>

                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="@lang('general.email')" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="@lang('general.password')" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="@lang('general.password-confirm')" autocomplete="new-password">
                </div>

                <div class="form-group mb-0">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-link btn-block">
                            {{ __('general.create-user') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection