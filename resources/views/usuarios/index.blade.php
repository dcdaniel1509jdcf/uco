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
                    <div class="card-header">{{ __('Listado de Todos los Usuarios') }}</div>

                    <div class="card-body">
                        <table id="dbtable" class="table table-bordered table-hover">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Usuario</th>

                                    <th>Nombre</th>

                                    <th>Codigo</th>

                                    <th>Estado</th>

                                    <th>Rol</th>

                                    <th>Eliminar</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($usuarios as $dat)

                                    <tr>

                                        <td>{{ $dat->id }}</td>

                                        <td>{{ $dat->email }}</td>

                                        <td>{{ $dat->name }}</td>

                                        <td>{{ $dat->codigo }}</td>

                                        <td>
                                            @if ($dat->estado == 1)
                                                {{ _('Activo') }}
                                            @else
                                                {{ _('Activo') }}
                                            @endif
                                        </td>

                                        <td>
                                            {{ $dat->rol }}
                                        </td>

                                        <td>

                                        </td>

                                        <td>



                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                            <tfoot>

                                <tr>

                                    <th>ID</th>

                                    <th>Usuario</th>

                                    <th>Nombre</th>

                                    <th>Codigo</th>

                                    <th>Estado</th>

                                    <th>Activacion</th>

                                    <th>Eliminar</th>

                                </tr>

                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
@endsection
