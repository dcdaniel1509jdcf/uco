@extends('layouts.temp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nueva Llamada') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('llamada.store') }}">
                            @csrf



                            <div class="row mb-3">
                                <label for="cliente"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Cliente') }}</label>

                                <div class="col-md-6">
                                    <select name="cliente" class="form-control cliente selectpicker" id="cliente" autofocus data-live-search="true">

                                        <option value="">SELECCIONE</option>

                                        @foreach ($cli as $cl)
                                            <option value="{{ $cl->id }}" >
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
                                <label for="telefono1"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono 1') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono1" type="text"
                                        class="form-control @error('telefono1') is-invalid @enderror" name="telefono1"
                                        value="{{ old('telefono1') }}" required autocomplete="telefono1">

                                    @error('telefono1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="telefono2"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono 2') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono2" type="text"
                                        class="form-control @error('telefono2') is-invalid @enderror" name="telefono2"
                                        value="{{ old('telefono2') }}" required autocomplete="telefono2" autofocus>

                                    @error('telefono2')
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
                                        value="{{ Auth::user()->name }}" required readonly>

                                    @error('usuario')
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
                                    <select name="estado" class="form-control" id="estado">
                                        <option value="">SELECCIONE</option>
                                        <option value="CONTACTADO">CONTACTADO</option>
                                        <option value="NO CONTACTADO">NO CONTACTADO</option>
                                    </select>

                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="telefonoContacto"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono Contactado') }}</label>

                                <div class="col-md-6">
                                    <input id="telefonoContacto" type="text"
                                        class="form-control @error('telefonoContacto') is-invalid @enderror"
                                        name="telefonoContacto" autocomplete="telefonoContacto">

                                    @error('telefonoContacto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="subestado"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Sub Estado') }}</label>

                                <div class="col-md-6">
                                    <select name="subestado" class="form-control" id="subestado">
                                        <option value="">SELECCIONE</option>
                                        <option value="EFECTIVO">EFECTIVO</option>
                                        <option value="NO EFECTIVO">NO EFECTIVO</option>
                                    </select>

                                    @error('subestado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="agendamiento"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fecha Agendamiento') }}</label>

                                <div class="col-md-6">
                                    <input id="agendamiento" type="date"
                                        class="form-control @error('agendamiento') is-invalid @enderror" name="agendamiento"
                                        autocomplete="agendamiento">

                                    @error('agendamiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="detalle"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Detalle') }}</label>

                                <div class="col-md-6">
                                    <input id="detalle" type="text"
                                        class="form-control @error('detalle') is-invalid @enderror" name="detalle"
                                        autocomplete="detalle">

                                    @error('detalle')
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

