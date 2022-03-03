@extends('layouts.temp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Gastos') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('gasto.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="concepto"
                                    class="col-md-4 col-form-label text-md-end">{{ __('concepto') }}</label>

                                <div class="col-md-6">
                                    <input id="concepto" type="text"
                                        class="form-control @error('concepto') is-invalid @enderror" name="concepto"
                                        value="{{ old('concepto') }}" required autocomplete="concepto">

                                    @error('concepto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="valor" class="col-md-4 col-form-label text-md-end">{{ __('Valor') }}</label>

                                <div class="col-md-6">
                                    <input id="valor" type="text" class="form-control @error('valor') is-invalid @enderror"
                                        name="valor" value="{{ old('valor') }}" required autocomplete="valor">

                                    @error('valor')
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
