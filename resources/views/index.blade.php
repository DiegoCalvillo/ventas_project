@extends('layouts.menu')

@section('content_index')
<leavel style="text-align: center;"><h1>Bienvenidos</h1></leavel>
<leavel>
	<center>
		<div class="row">
			<div class="col-lg-6" style="text-align: right;">
				<a class="btn btn-primary btn-lg" href="{{ url('/categorias') }}">Categorías</a>
			</div>
			<div class="col-lg-6" style="text-align: left;">
				<a href="{{ url('/clientes') }}" class="btn btn-primary btn-lg">Clientes</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-6" style="text-align: right;">
				<a href="{{ url('/articulos') }}" class="btn btn-primary btn-lg">Artículos</a>
			</div>
			<div class="col-lg-6" style="text-align: left;">
				<a href="{{ url('/ventas') }}" class="btn btn-primary btn-lg">Venta de Artículos</a>
			</div>
		</div>
	</center>
</leavel>
@stop
