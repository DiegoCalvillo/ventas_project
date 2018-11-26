@extends('layouts.menu')

@section('content_ventas_registro')
<div class="container">
	@include('alerts.request')
	<h1>Generación de Ventas</h1>
	<div class="row">
		{!! Form::open(['route' => 'ventas/store', 'method' => 'POST']) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Registros</b>
				</div>
				<div class="panel-body">
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Seleccionar Cliente') !!}
							{!! Form::select('cliente_id', $clientes, null, ['id' => 'clientes', 'class' => 'form-control input-sm', 'placeholder' => 'Seleccione']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Seleccionar Articulo') !!}
							{!! Form::select('articulo_id', $articulos, null, ['id' => 'articulos', 'class' => 'form-control input-sm', 'placeholder' => 'Seleccione']) !!}
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Descripción') !!}
							{!! Form::text('descripcion', null, ['id' => 'descripcion', 'class' => 'form-control input-sm', 'readonly' => 'readonly']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Cantidad') !!}
							{!! Form::text('cantidad', null, ['id' => 'cantidad', 'class' => 'form-control input-sm', 'readonly' => 'readonly']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Precio') !!}
							{!! Form::text('Precio', null, ['id' => 'precio', 'class' => 'form-control input-sm', 'readonly' => 'readonly']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Especificar cantidad') !!}
							{!! Form::text('cantidad_especificada', null, ['class' => 'form-control input-sm', 'id' => 'cantidad_especificada']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<a id="agregar_tabla" class="btn btn-primary">Agregar</a>
						</div>
					</div>
					<table width="100%" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Articulo</th>
								<th>Descripcion</th>
								<th>Precio</th>
								<th>Cantidad</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td id="articulo_tabla"></td>
									<td id="descripcion_tabla"></td>
									<td id="precio_tabla"></td>
									<td id="cantidad_tabla"></td>
								</tr>			
						</tbody>
					</table>
					<div class="col-sm-6">
						<div class="form-group">
							<b>$ Total: </b><label id="total" ></label>
							{!! Form::hidden('total_venta', null, ['class' => 'form-control input-sm', 'id' => 'total_venta']) !!}
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Generar venta</button>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#articulos').change(function(event){
		$.get("/articulo_id/"+event.target.value+"", function(response){
			$('#descripcion').empty();
			$('#cantidad').empty();
			$('#preio').empty();
			$('#descripcion').val(response.descripcion);
			$('#cantidad').val(response.cantidad);
			$('#precio').val(response.precio);
		});
	});

	$('#agregar_tabla').click(function(){
		var articulo = $('#articulos option:selected').text();
		if (articulo == 'Seleccione') {
			alert('Debe elegir un articulo');
		} else if(document.getElementById('cantidad_especificada').value == '') {
			alert('Debe especificar la cantidad a vender'); 
		} else if(parseInt(document.getElementById('cantidad_especificada').value) > parseInt(document.getElementById('cantidad').value)) {
			alert('La cantidad especificada es mayor a la cantidad actual del producto');
		} else {
			document.getElementById('articulo_tabla').innerHTML = articulo;
			document.getElementById('descripcion_tabla').innerHTML = document.getElementById('descripcion').value;
			var precio = (parseInt(document.getElementById('cantidad_especificada').value) * parseInt(document.getElementById('precio').value));
			document.getElementById('precio_tabla').innerHTML = precio;
			document.getElementById('cantidad_tabla').innerHTML = document.getElementById('cantidad_especificada').value;
			var total = precio;
			document.getElementById('total').innerHTML = total;
			$('#total_venta').val(total);
		}
	});
</script>
@stop