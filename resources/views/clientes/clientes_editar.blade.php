@extends('layouts.menu')

@section('content_clientes_editar')
<div class="container">
	@include('alerts.request')
	<h1>Editar Cliente</h1>
	<div class="row">
		{!! Form::open(['route' => 'clientes/update', 'method' => 'PUT']) !!}
		{!! Form::hidden('id', $cliente->id) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Editar Cliente') !!}
				</div>
				<div class="panel-body">
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre') !!}
							{!! Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Apellido') !!}
							{!! Form::text('apellido_cliente', $cliente->apellido_cliente, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Direccion') !!}
							{!! Form::text('direccion', $cliente->direccion, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Email') !!}
							{!! Form::email('email', $cliente->email, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Telefono') !!}
							{!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'RFC') !!}
							{!! Form::text('RFC', $cliente->RFC, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</div>
	</div>
</div>
@stop