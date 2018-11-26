@extends('layouts.menu')

@section('content_ventas')
<div class="container">
	@include('alerts.success')
	<h1>Venta de Productos</h1>
	<div class="row">
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
								<th>Fecha</th>
								<th>Cliente</th>
								<th>Total de Compra</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($ventas as $venta)
								<tr>
									<td>
										<a href="{{ route('ventas/show', ['id' => $venta->id]) }}">{{ $venta->id }}</a>
									</td>
									<td>{{ $venta->created_at }}</td>
									<td>{{ $venta->cliente->nombre_cliente }} {{ $venta->cliente->apellido_cliente }}</td>
									<td>{{ $venta->precio }}</td>
									<td></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="{{ url('ventas/create') }}" class="btn btn-primary">Generar Venta</a>
		</div>
	</div>
</div>
@stop