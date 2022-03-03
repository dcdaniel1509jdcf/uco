@extends('layouts.temp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Despacho') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('despacho.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="usuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="usuario" type="text"
                                        class="form-control @error('usuario') is-invalid @enderror" name="usuario"
                                        value="{{ Auth::user()->name }}" required autocomplete="usuario" readonly>

                                    @error('usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="guia"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numero Guia') }}</label>

                                <div class="col-md-6">
                                    <input id="guia" type="text" class="form-control @error('guia') is-invalid @enderror"
                                        name="guia" value="{{ old('guia') }}" required autocomplete="guia" autofocus>

                                    @error('guia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cliente"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Cliente') }}</label>

                                <div class="col-md-6">
                                    <select name="cliente" class="form-control selectpicker" data-live-search="true" id="cliente">

                                        <option value="">SELECCIONE</option>

                                        @foreach ($cli as $cl)

                                            <option value="{{ $cl->id }}">
                                                {{ $cl->nombre }}
                                            </option>

                                        @endforeach

                                    </select>

                                    @error('cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="litro" class="col-md-4 col-form-label text-md-end">{{ __('Litros') }}</label>

                                <div class="col-md-6">
                                    <input id="litro" type="text" class="form-control @error('litro') is-invalid @enderror"
                                        name="litro" value="{{ old('litro') }}" required autocomplete="litro">

                                    @error('litro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="entrega"                                     class="col-md-4 col-form-label text-md-end">{{ __('Entrega') }}</label>

                                <div class="col-md-6">
                                    <input id="entrega" type="text"
                                        class="form-control @error('entrega') is-invalid @enderror" name="entrega"
                                        value="{{ old('entrega') }}" required autocomplete="entrega">

                                    @error('entrega')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="observacion"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Observación') }}</label>

                                <div class="col-md-6">
                                    <input id="observacion" type="text"
                                        class="form-control @error('observacion') is-invalid @enderror" name="observacion"
                                        autocomplete="observacion">

                                    @error('observacion')
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
