<!DOCTYPE html>
<html>
<head>
	<title>Login de Usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body style="background-color: gray;">
	<br><br><br>
	<div class="container">
		{!! Form::open(['route' => 'login/store', 'method' => 'POST']) !!}
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">Dati 
					Migliori</div>
					@include('alerts.success')
					@include('alerts.errors')
					<div class="panel panel-body">
						<p>
							<img header ="center" src="img/ventas.jpg"  height="190">
						</p>
						<form id="frmLogin">
							{!! Form::label('full_name', 'Usuario') !!}
							{!! Form::text('name', null, ['class' => 'form-control input-sm']) !!}
							{!! Form::label('full_name', 'Password') !!}
							{!! Form::password('password', ['class' => 'form-control input-sm']) !!}
							<p></p>
							<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
							<a href="{{ route('usuarios/create') }}" class="btn btn-danger btn-sm">Registrar</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>