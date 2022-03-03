@extends('layouts.temp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Usuario') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('usuario.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
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
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="codigo" class="col-md-4 col-form-label text-md-end">{{ __('Codigo') }}</label>

                                <div class="col-md-6">
                                    <input id="codigo" type="text"
                                        class="form-control @error('codigo') is-invalid @enderror" name="codigo"
                                        value="{{ old('codigo') }}" required autocomplete="codigo">

                                    @error('codigo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="estado"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                                <div class="col-md-6">

                                    <select id="estado" class="form-control @error('estado') is-invalid @enderror"
                                        name="estado" value="{{ old('estado') }}" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>


                                    </select>
                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rol"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>

                                <div class="col-md-6">

                                    <select id="rol" class="form-control @error('rol') is-invalid @enderror"
                                        name="rol" value="{{ old('rol') }}" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="operador">Operador</option>


                                    </select>
                                    @error('rol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation"  autocomplete="new-password">
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
