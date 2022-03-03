@extends('layouts.temp')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h6><i class="icon fas fa-info"></i> {{ session('message') }} !</h6>

                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Listado de Todas las Llamadas') }}</div>

                    <div class="card-body">
                        <table id="dbtable" class="table table-bordered table-hover">

                            <thead>

                                <tr>
                                    <th>ID</th>

                                    <th>Cliente</th>

                                    <th>estado</th>

                                    <th>usuario</th>

                                    <th>Observacion</th>



                                    <th>Activacion</th>

                                    <th>Eliminar</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($data as $cl)
                                    <tr>

                                        <td>{{ $cl->id }}</td>

                                        <td>{{ $cl->cliente }}</td>

                                        <td>{{ $cl->estado }}</td>

                                        <td>{{ $cl->usuario }}</td>
                                        <td>{{ $cl->observacion }}</td>




                                        <td>

                                        </td>

                                        <td>



                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
@endsection
