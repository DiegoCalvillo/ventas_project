@extends('layouts.menu')

@section('content_clientes_perfil')
<div class="container">
	@include('alerts.success')
	<h1>Cliente: {{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</h1>
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
								<th>Nombre: </th>
								<td> {{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</td>
							</tr>
							<tr>
								<th>Direccion</th>
								<td>{{ $cliente->direccion }}</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>{{ $cliente->email }}</td>
							</tr>
							<tr>
								<th>Telefono</th>
								<td>{{ $cliente->telefono }}</td>
							</tr>
							<tr>
								<th>RFC</th>
								<td>{{ $cliente->RFC }}</td>
							</tr>
							<tr>
								<th>Creado por: </th>
								<td>{{ $persona->nombre }} {{ $persona->apellidos }}</td>
							</tr>
							<tr>
								<th>Fecha de Creación</th>
								<td>{{ $cliente->created_at }}</td>
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
					<a href="{{ route('clientes/edit', ['id' => $cliente->id]) }}" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<button class="btn btn-danger" data-toggle="modal" data-target="#deleteClienteModal"><i class="glyphicon glyphicon-remove"></i> Eliminar</button>
					@if($cliente->ventas->count() != 0)
						<a href="{{ route('clientes/ventas_hechas', ['id' => $cliente->id]) }}" class="btn btn-primary" type="button">Ventas hechas al Cliente</a>
					@endif
					<a href="{{ url('/clientes') }}" type="button" class="btn btn-primary"> Regresar a Clientes</a>
					@include('clientes.clientes_modals')
				</div>
			</div>
		</div>
	</div>
</div>
@stop