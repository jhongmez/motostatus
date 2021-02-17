@extends('layouts.app')

@section('title', 'Editar Aceite')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-tint"></i>  Editar Aceite
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('oils') }}">Aceites</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-tint"></i> 
                        Editar Aceite
                    </li>
                </ol>
            </nav>


            <form method="POST" action="{{ url('oils/'.$oil->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $oil->id }}">

                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $oil->name) }}" placeholder="@lang('general.name-oil')" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" placeholder="@lang('general.description')" autofocus>{{ old('description', $oil->description) }}</textarea>
                </div>

                <div class="form-group">
                    <select name="activo" id="activo" class="form-control @error('activo') is-invalid @enderror">
                        <option value="">Seleccione...</option>
                        <option value="1" @if(old('activo', $oil->activo) == 1) selected @endif>@lang('general.active')</option>
                        <option value="0" @if(old('activo', $oil->activo) == 0) selected @endif>@lang('general.inactive')</option>
                    </select>

                    @error('activo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-0">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-link btn-block">
                            {{ __('general.edit-oil') }}
                            <i class="fa fa-save"></i> 
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection