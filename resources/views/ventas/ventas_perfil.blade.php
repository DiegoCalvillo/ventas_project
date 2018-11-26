@extends('layouts.menu')

@section('content_ventas_perfil')
<div class="container">
	@include('alerts.success')
	<h1>Folio Venta: {{ $venta->id }}</h1>
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Información</b>
				</div>
				<div class="panel-body">
					<table width="100%">
						<tbody>
							<tr>
								<th>Cliente: </th>
								<td> {{ $venta->cliente->nombre_cliente }} {{ $venta->cliente->apellido_cliente }}</td>
							</tr>
							<tr>
								<th>Articulo vendido</th>
								<td>{{ $venta->articulo->nombre_articulo }}</td>
							</tr>
							<tr>
								<th>Cantidad</th>
								<td>{{ $venta->cantidad_vendida }}</td>
							</tr>
							<tr>
								<th>Precio</th>
								<td>$ {{ $venta->precio }}</td>
							</tr>
							<tr>
								<th>Venta hecha por: </th>
								<td>{{ $persona->nombre }} {{ $persona->apellidos }}</td>
							</tr>
							<tr>
								<th>Fecha de Creación</th>
								<td>{{ $venta->created_at }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Opciones</b>
				</div>
				<div class="panel-body">
					<a href="" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-list-alt"></i> Ticket</a>
					<a href="{{ route('ventas/descargar_pdf', ['id' => $venta->id]) }}" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-file"></i> Reporte</a>
					<a href="{{ url('/ventas') }}" type="button" class="btn btn-primary"> Regresar a ventas</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop