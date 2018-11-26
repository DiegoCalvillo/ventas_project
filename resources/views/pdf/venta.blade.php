@extends('layouts.menu')

@section('content_pdf_venta')
 <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Cliente</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha Creacion</th>
            </tr>                            
        </thead>
        <tbody>
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->cliente_id }}</td>
                <td>{{ $venta->articulo_id }}</td>
                <td>{{ $venta->cantidad_vendida }}</td>
                <td>{{ $venta->precio }}</td>
                <td>{{ $venta->created_at }}</td>
            </tr>
        </tbody>
    </table>
@stop