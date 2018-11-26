@extends('layouts.menu')

@section('content_articulos')
<div class="container">
	<h1>Articulos</h1>
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
								<th>Articulo</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody id="tabla_articulos">
							@foreach($articulos as $articulo)
								<tr>
									<td>{{ $articulo->id }}</td>
									<td>
										<a href="{{ route('articulos/show', ['id' => $articulo->id]) }}">{{ $articulo->nombre_articulo }}</a>
									</td>
									<td>
										<a href="{{ route('articulos/edit', ['id' => $articulo->id]) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="{{ route('articulos/create') }}" class="btn btn-primary">Agregar</a>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Filtro por categorias</b>
				</div>
				<div class="panel-body">
					{!! Form::select('categorias', $categorias, null, ['id' => 'categorias', 'class' => 'form-control input-sm', 'placeholder' => 'Todos']) !!}
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#categorias').change(function(event){
		console.log("value = " + event.target.value);
		$.get('/categoria_id/'+event.target.value+"", function(response){
			$('#tabla_articulos').empty();
			$(response).each(function(key, value){
				$('#tabla_articulos').append('<tr><td>'+value.id+'</td><td><a href="/articulos/'+value.id+'">'+value.nombre_articulo+'</a></td><td><a href="/articulos/'+value.id+'/edit" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td></tr>')
			});
		});
	});
</script>
@stop