@extends('layouts.app')

@section('title', 'Crear Marca')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="far fa-copyright"></i> Crear Marca
            </h1>
            <hr>
              
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('mechanics') }}">Marcas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="far fa-copyright"></i>
                        Crear Marca
                    </li>
                </ol>
            </nav>

            
            <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('general.name-brand')" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" placeholder="@lang('general.description')">{{ old('description') }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <div class="text-center my-3">
                            <img src="{{ asset('imgs/no-brand.png') }}" class="img-thumbnail" id="preview" width="120px">
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="photo" name="image" accept="image/*">
                           <label class="custom-file-label" for="customFile"> 
                                <i class="fa fa-upload"></i> 
                                Imagen
                           </label>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>    
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-link btn-block">
                            {{ __('general.create-brand') }}
                            <i class="fa fa-save"></i> 
                        </button>
                </div>
            </form>
        </div>
    </div>

@endsection