@extends('layouts.menu')

@section('content_articulos_entrada_producto')
<div class="container">
	@include('alerts.request')
	<h1>Entrada de Producto</h1>
	{!! Form::open(['route' => 'articulos/registrar_entrada_producto', 'method' => 'POST']) !!}
	{!! Form::hidden('id', $articulo->id) !!}
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Registrar entrada de producto') !!}
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Cantidad actual') !!}
							{!! Form::text('cantidad_articulo', $cantidad, ['class' => 'form-control input-sm', 'readonly' => 'readonly', 'id' => 'cantidad_articulo']) !!}
							{!! Form::hidden('cantidad_actual', $cantidad, ['class' => 'form-control input-sm', 'id' => 'cantidad_actual']) !!}
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Cantidad a agregar') !!}
							{!! Form::text('cantidad', null, ['class' => 'form-control input-sm', 'id' => 'cantidad', 'autocomplete' => 'off']) !!}
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-primary" type="submit">Agregar</button>
			<a href="{{ route('articulos/show', ['id' => $articulo->id]) }}" class="btn btn-danger">Regresar a Articulo</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#cantidad').keyup(function(){
		var cantidad_actual = parseInt(document.getElementById('cantidad_articulo').value);
		var cantidad = parseInt($(this).val());
		cantidad_actual = cantidad_actual + cantidad;
		if(isNaN(cantidad_actual)) {
			cantidad_actual = parseInt(document.getElementById('cantidad_actual').value);
		}
		$('#cantidad_articulo').val(cantidad_actual);
	});
</script>
@stop