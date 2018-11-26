@extends('layouts.menu')

@section('content_articulos_perfil')
<div class="container">
	@include('alerts.success')
	<h1>Articulo: {{ $articulo->nombre_articulo }}</h1>
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
								<td> {{ $articulo->nombre_articulo }}</td>
							</tr>
							<tr>
								<th>Descripción</th>
								<td>{{ $articulo->descripcion }}</td>
							</tr>
							<tr>
								<th>Categoria</th>
								<td>
									<a href="{{ route('categorias/show', ['id' => $articulo->categoria->id]) }}">{{ $articulo->categoria->nombre_categoria }}</a>
								</td>
							</tr>
							<tr>
								<th>Cantidad</th>
								<td>{{ $articulo->cantidad }}</td>
							</tr>
							<tr>
								<th>Precio</th>
								<td>$ {{ $articulo->precio }}</td>
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
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Foto de perfil</b>
				</div>
				<div class="panel-body">
					<img width="40%" src="{!! asset($articulo->imagen->ruta_imagen) !!}">
				</div>
			</div>
		</div>
	</div>
	@include('articulos.articulos_modals')
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Opciones</b>
				</div>
				<div class="panel-body">
					<a href="{{ route('articulos/edit', ['id' => $articulo->id]) }}" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<a href="{{ route('articulos/entrada_producto', ['id' => $articulo->id]) }}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Registrar entrada</a>
					<button class="btn btn-danger" data-toggle="modal" data-target="#deleteArticuloModal"><i class="glyphicon glyphicon-remove"></i> Eliminar</button>
					<a href="{{ url('/articulos') }}" type="button" class="btn btn-primary"> Regresar a Articulos</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop