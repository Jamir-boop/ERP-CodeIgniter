@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="productos">
            <thead>
                <th>ID</th>
                <th>Codigo</th>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Precio-compra</th>
                <th>Precio-venta</th>
                <th>Unidades</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->cod_prod }}</td>
                        <td>{{ $producto->fabri_prod }}</td>
                        <td>{{ $producto->model_prod }}</td>
                        <td>{{ $producto->tipo_prod }}</td>
                        <td>{{ $producto->prec_prod }}</td>
                        <td>{{ $producto->vent_prod }}</td>
                        <td>{{ $producto->unidades_prod }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Editar</a>
                        </td>

                        <td>
                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#productos').DataTable();
        });
    </script>
@stop