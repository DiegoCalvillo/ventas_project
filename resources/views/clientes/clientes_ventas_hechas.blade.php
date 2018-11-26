@extends('layouts.menu')

@section('content_clientes_ventas_hechas')
<div class="container">
	<h1>Ventas hechas a: <b>{{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</b></h1>
	<div class="row">
		@include('alerts.success')
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Registros</b>
				</div>
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Folio</th>
								<th>Articulo</th>
								<th>Cantidad</th>
								<th>Precio</th>
							</tr>
						</thead>
						<tbody>
							@foreach($ventas as $venta)
								<tr>
									<td>
										<a href="{{ route('ventas/show', ['id' => $venta->id]) }}">{{ $venta->id }}</a>
									</td>
									<td>{{ $venta->articulo->nombre_articulo }}</td>
									<td>{{ $venta->cantidad_vendida }}</td>
									<td>{{ $venta->precio }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="{{ url('/clientes') }}" class="btn btn-primary">Regresar a Clientes</a>
		</div>
	</div>
</div>
@stop