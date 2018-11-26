@extends('layouts.menu')

@section('content_clientes')
<div class="container">
	<h1>Clientes</h1>
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
								<th>#</th>
								<th>Cliente</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($clientes as $cliente)
								<tr>
									<td>{{ $cliente->id }}</td>
									<td>
										<a href="{{ route('clientes/show', ['id' => $cliente->id]) }}">{{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</a>
									</td>
									<td>
										<a href="{{ route('clientes/edit', ['id' => $cliente->id]) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="{{ route('clientes/create') }}" class="btn btn-primary">Agregar</a>
		</div>
	</div>
</div>
@stop