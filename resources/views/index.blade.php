@extends('layouts.menu_for_index')

@section('content_index')
<leavel style="text-align: center;"><h1>Bienvenidos</h1></leavel>
<leavel>
	<center>
		<div class="row">
			<div class="col-lg-6" style="text-align: right;">
				<div class="contenedor">
					<a class="btn btn-primary btn-lg" href="{{ url('/categorias') }}"><img src="../img/fotos_inicio/categorias.png" width="300" height="300"></a>
					<div class="centrado"><h1><b style="color: #FFFFFF";>Categorias</b></h1></div>
				</div>
			</div>
			<div class="col-lg-6" style="text-align: left;">
				<div class="contenedor">
					<a href="{{ url('/clientes') }}" class="btn btn-primary btn-lg"><img src="../img/fotos_inicio/clientes.jpg" width="300" height="300"></a>
					<div class="centrado"><h1><b style="color: #FFFFFF";>Clientes</b></h1></div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-6" style="text-align: right;">
				<div class="contenedor">
					<a href="{{ url('/articulos') }}" class="btn btn-primary btn-lg"><img src="../img/fotos_inicio/articulos.jpg" width="300" height="300"></a>
					<div class="centrado"><h1><b style="color: #FFFFFF";></b>Articulos</h1></div>
				</div>
			</div>
			<div class="col-lg-6" style="text-align: left;">
				<div class="contenedor">
					<a href="{{ url('/ventas') }}" class="btn btn-primary btn-lg"><img src="../img/fotos_inicio/ventas.jpg" width="300" height="300"></a>
					<div class="centrado"><h1><b style="color: #FFFFFF";></b>Ventas</h1></div>
				</div>
			</div>
		</div>
	</center>
</leavel>
<style type="text/css">
	.contenedor{
		position: relative;
		display: inline-block;
		text-align: center;
	}

	.texto-encima{
		position: absolute;
		top: 10px;
		left: 10px;
	}

	.centrado{
		position: absolute;
		top: 50%;
		left: 50%
		transform: translate(-50%, -50%);
	}
</style>
@stop
