@extends('layouts.temp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Cliente') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cliente.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="rut" class="col-md-4 col-form-label text-md-end">{{ __('Rut') }}</label>

                                <div class="col-md-6">
                                    <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror"
                                        name="rut" value="{{ old('rut') }}" required autocomplete="rut" autofocus>

                                    @error('rut')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre') }}" required autocomplete="nombre">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="region" class="col-md-4 col-form-label text-md-end">{{ __('Region') }}</label>

                                <div class="col-md-6">
                                    <input id="region" type="text"
                                        class="form-control @error('region') is-invalid @enderror" name="region"
                                        value="{{ old('comuna') }}" required>
                                    @error('region')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="comuna"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Comuna') }}</label>
                                <div class="col-md-6">
                                    <input id="comuna" type="text"
                                        class="form-control @error('comuna') is-invalid @enderror" name="comuna"
                                        value="{{ old('comuna') }}" required autocomplete="comuna">
                                    @error('comuna')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="direccion"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Dirección') }}</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text"
                                        class="form-control @error('direccion') is-invalid @enderror" name="direccion"
                                        value="{{ old('direccion') }}" required autocomplete="direccion">

                                    @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bidones"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Bidones') }}</label>
                                <div class="col-md-6">
                                    <input id="bidones" type="text"
                                        class="form-control @error('bidones') is-invalid @enderror" name="bidones"
                                        value="{{ old('bidones') }}" required autocomplete="bidones">

                                    @error('bidones')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="usuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="usuario" type="text"
                                        class="form-control @error('usuario') is-invalid @enderror" name="usuario"
                                        value="{{ Auth::user()->name }}" readonly>

                                    @error('usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>

                                <div class="col-md-6">
                                    <input id="fecha" type="date" class="form-control" name="fecha" autocomplete="fecha">

                                    @error('fecha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Telefono1"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono 1') }}</label>

                                <div class="col-md-6">
                                    <input id="Telefono1" type="text"
                                        class="form-control @error('tel1') is-invalid @enderror" name="tel1">

                                    @error('tel1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Telefono2"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono 2') }}</label>

                                <div class="col-md-6">
                                    <input id="Telefono2" type="text"
                                        class="form-control @error('tel2') is-invalid @enderror" name="tel2">

                                    @error('tel2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
