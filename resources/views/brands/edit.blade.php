@extends('layouts.app')

@section('title', 'Editar Marca')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-screwdriver"></i>  Editar marca
            </h1>
            <hr>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('brands') }}">Marcas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-screwdriver"></i> 
                        Editar Marca
                    </li>
                </ol>
            </nav>


            {{-- <form method="POST" action="{{ url('mechanics/'.$mechanic->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $mechanic->id }}">

                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $mechanic->name) }}" placeholder="@lang('general.name-cda')" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" placeholder="@lang('general.description')" autofocus>{{ old('description', $mechanic->description) }}</textarea>
                </div>

                <div class="form-group">
                    <select name="activo" id="activo" class="form-control @error('activo') is-invalid @enderror">
                        <option value="">Seleccione...</option>
                        <option value="1" @if(old('activo', $mechanic->activo) == 1) selected @endif>@lang('general.active')</option>
                        <option value="0" @if(old('activo', $mechanic->activo) == 0) selected @endif>@lang('general.inactive')</option>
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
                            {{ __('general.edit-cda') }}
                            <i class="fa fa-save"></i> 
                        </button>
                    </div>
                </div>

            </form> --}}
            <form action="{{ url('brands/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $brand->id }}">
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $brand->name) }}" placeholder="@lang('general.name-brand')" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <div class="text-center my-3">
                        <img src="{{ asset($brand->image) }}" class="img-thumbnail" id="preview" width="120px">
                    </div>
                    <div class="custom-file">
                       <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
                       <label class="custom-file-label" for="customFile"> 
                            <i class="fa fa-upload"></i> 
                            Foto
                       </label>
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>    
                </div>
    
                <div class="form-group">
    
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old('description', $brand->description) }}</textarea>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <button type="submit" class="btn btn-link btn-block">
                        {{ __('general.edit-brand') }}
                        <i class="fa fa-save"></i> 
                    </button>
                </div>
    
            </form>
        </div>
    </div>

@endsection