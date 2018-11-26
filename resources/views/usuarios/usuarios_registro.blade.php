<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	{!! Html::style('librerias/bootstrap/css/bootstrap.css') !!}
	{!! Html::script('libreias/jquery-3.2.1.min.js') !!}
	{!! Html::script('js/funciones.js') !!}
</head>
<body style="background-color: gray;">
	<br><br><br>
	<div class="container">
		{!! Form::open(['route' => 'usuarios/store', 'method' => 'POST']) !!}
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					@include('alerts.request')
					<!--<div class="panel panel-heading">Registrar Administrador</div>-->
					<div class="panel panel-body">
						<form id="frmRegistro">
							{!! Form::label('full_name', 'Nombre') !!}
							{!! Form::text('nombre', null, ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Apellido') !!}
							{!! Form::text('apellidos', null, ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Email') !!}
							{!! Form::text('email', null, ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Usuario') !!}
							{!! Form::text('usuario', null, ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Contraseña') !!}
							{!! Form::password('password', ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Confirmar contraseña') !!}
							{!! Form::password('password_confirm', ['class' => 'form-control input-sm']) !!}
							<p></p>
							<button class="btn btn-primary" type="submit">Registrar</button>
							<a href="/login" class="btn btn-default">Regresar login</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>