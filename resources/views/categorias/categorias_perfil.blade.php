@extends('layouts.menu')

@section('content_categorias_perfil')
<div class="container">
	@include('alerts.errors')
	<h1>Categoría: {{ $categoria->nombre_categoria }}</h1>
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
								<td> {{ $categoria->nombre_categoria }}</td>
							</tr>
							<tr>
								<th>Creado por: </th>
								<td>{{ $persona->nombre }} {{ $persona->apellidos }}</td>
							</tr>
							<tr>
								<th>Fecha de Creación</th>
								<td>{{ $fecha_creacion }}</td>
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
					<a href="{{ url('/categorias') }}" type="button" class="btn btn-primary"> Regresar a Categorias</a>
					<a href="{{ route('categorias/edit', ['id' => $categoria->id]) }}" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<button data-toggle="modal" data-target="#deleteCategoriaModal" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</button>
					@include('categorias.categorias_modals')
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Articulos asociados</b>
				</div>
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Cantidad</th>
								<th>Precio</th>
							</tr>
						</thead>
						<tbody>
							@foreach($articulos as $articulo)
								<tr>
									<td>{{ $articulo->id }}</td>
									<td>
										<a href="{{ route('articulos/show', ['id' => $articulo->id]) }}">{{ $articulo->nombre_articulo }}</a>
									</td>
									<td>{{ $articulo->cantidad }}</td>
									<td>{{ $articulo->precio }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop