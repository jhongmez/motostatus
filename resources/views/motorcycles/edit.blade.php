@extends('layouts.app')

@section('title', 'Editar Motocicleta')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>
                <i class="fas fa-motorcycle"></i> Editar motocicleta
            </h1>
            <hr>
              
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('mechanics') }}">Motocicletas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-motorcycle"></i>
                        Editar motocicleta
                    </li>
                </ol>
            </nav>

            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif

            <form method="POST" action="{{ url('motorcycles/'.$motorcycle->id) }}">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $motorcycle->id }}">

                <input name="user_id" type="hidden" value="{{ auth()->user()->id }}" class="form-control @error('user_id') is-invalid @enderror">

                <div class="form-group">
                    <label for="brand">Seleccione la marca</label>
                    <select name="brand_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option value="">Seleccione...</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" @if ($brand->id == old('brand_id', $motorcycle->brand_id)) selected @endif>
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input id="nameMotorcycle" type="text" class="form-control @error('nameMotorcycle') is-invalid @enderror" name="nameMotorcycle" value="{{ old('nameMotorcycle', $motorcycle->nameMotorcycle) }}" placeholder="@lang('general.name-moto')" autofocus>
     
                    @error('nameMotorcycle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input id="cc" type="number" class="form-control @error('cc') is-invalid @enderror" name="cc" value="{{ old('cc', $motorcycle->cc) }}" placeholder="@lang('general.cc')" autofocus>
     
                    @error('cc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <input id="model" type="number" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model',$motorcycle->model) }}" placeholder="@lang('general.model')" autofocus>
     
                    @error('model')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="soat">Seleccione su SOAT</label>
                    <select name="soat_id" class="form-control @error('soat_id') is-invalid @enderror" id="">
                        <option value="">Seleccione...</option>
                        @foreach ($soats as $soat)
                            <option value="{{ $soat->id }}" @if($soat->id == old('soat_id', $motorcycle->soat_id)) selected @endif>{{ $soat->name }}</option>
                        @endforeach
                    </select>
        
                    @error('soat_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="">Fecha soat</label>

                    <input id="soatDate" type="date" class="form-control @error('soatDate') is-invalid @enderror" name="soatDate" value="{{ old('soatDate', $motorcycle->soatDate) }}" placeholder="@lang('general.soatDate')" autofocus>
     
                    @error('soatDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="">Impuesto</label>
                    <select name="taxes" class="form-control @error('taxes') is-invalid @enderror" id="taxes">
                        <option value="">Seleccione...</option>
                        <option value="1" @if (old('taxes', $motorcycle->taxes) == 1) selected @endif>Si</option>
                        <option value="0" @if (old('taxes', $motorcycle->taxes) == 0) selected @endif>No</option>
                    </select>
    
                    @error('taxes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="">Fecha impuesto</label>
                    <input id="taxesDate" type="date" class="form-control @error('taxesDate') is-invalid @enderror" name="taxesDate" value="{{ old('taxesDate', $motorcycle->taxesDate) }}" placeholder="@lang('general.taxesDate')" autofocus>
     
                    @error('taxesDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="mechanic">Seleccione su tecnomecnico</label>
                    <select name="mechanic_id" class="form-control @error('mechanic_id') is-invalid @enderror" id="">
                        <option value="">Seleccione...</option>
                        @foreach ($mechanics as $mechanic)
                            <option value="{{ $mechanic->id }}" @if($mechanic->id == old('mechanic_id', $motorcycle->mechanic_id)) selected @endif>{{ $mechanic->name }}</option>
                        @endforeach
                    </select>
        
                    @error('mechanic_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="">Fecha tecnomecanico</label>

                    <input id="mechanicsDate" type="date" class="form-control @error('mechanicsDate') is-invalid @enderror" name="mechanicsDate" value="{{ old('mechanicsDate', $motorcycle->mechanicsDate) }}" placeholder="@lang('general.mechanicsDate')" autofocus>
     
                    @error('mechanicsDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="tire">Seleccione sus llantas</label>
                    <select name="tire_id" class="form-control @error('tire_id') is-invalid @enderror" id="">
                        <option value="">Seleccione...</option>
                        @foreach ($tires as $tire)
                            <option value="{{ $tire->id }}" @if($tire->id == old('tire_id', $motorcycle->tire_id)) selected @endif>{{ $tire->name }}</option>
                        @endforeach
                    </select>
        
                    @error('tire_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="">Fecha llantas</label>

                    <input id="tiresDate" type="date" class="form-control @error('tiresDate') is-invalid @enderror" name="tiresDate" value="{{ old('tiresDate', $motorcycle->tiresDate) }}" placeholder="@lang('general.tiresDate')" autofocus>
     
                    @error('tiresDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="brake">Seleccione sus frenos</label>
                    <select name="brake_id" class="form-control @error('brake_id') is-invalid @enderror" id="">
                        <option value="">Seleccione...</option>
                        @foreach ($brakes as $brake)
                            <option value="{{ $brake->id }}" @if($brake->id == old('brake_id', $motorcycle->brake_id)) selected @endif>{{ $brake->name }}</option>
                        @endforeach
                    </select>
        
                    @error('brake_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="">Fecha frenos</label>

                    <input id="brakesDate" type="date" class="form-control @error('brakesDate') is-invalid @enderror" name="brakesDate" value="{{ old('brakesDate', $motorcycle->brakesDate) }}" placeholder="@lang('general.brakesDate')" autofocus>
     
                    @error('brakesDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="oil">Seleccione su aceite</label>
                    <select name="oil_id" class="form-control @error('oil_id') is-invalid @enderror" id="">
                        <option value="">Seleccione...</option>
                        @foreach ($oils as $oil)
                            <option value="{{ $oil->id }}" @if($oil->id == old('oil_id', $motorcycle->oil_id)) selected @endif>{{ $oil->name }}</option>
                        @endforeach
                    </select>
        
                    @error('oil_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="">Fecha aceite</label>

                    <input id="oilsDate" type="date" class="form-control @error('oilsDate') is-invalid @enderror" name="oilsDate" value="{{ old('oilsDate', $motorcycle->oilsDate) }}" placeholder="@lang('general.oilsDate')" autofocus>
     
                    @error('oilsDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group mb-0">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-link btn-block">
                            {{ __('general.create-moto') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection