@extends('layouts.menu')

@section('content_clientes_registro')
<div class="container">
	@include('alerts.request')
	<h1>Agregar Cliente</h1>
	<div class="row">
		{!! Form::open(['route' => 'clientes/store', 'method' => 'POST']) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Nuevo Cliente') !!}
				</div>
				<div class="panel-body">
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre') !!}
							{!! Form::text('nombre_cliente', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Apellido') !!}
							{!! Form::text('apellido_cliente', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Direccion') !!}
							{!! Form::text('direccion', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Email') !!}
							{!! Form::email('email', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Telefono') !!}
							{!! Form::text('telefono', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'RFC') !!}
							{!! Form::text('RFC', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
		</div>
	</div>
</div>
@stop