@extends('layouts.menu')

@section('content_articulos_editar')
<div class="container">
	@include('alerts.request')
	<h1>Editar Articulo</h1>
	<div class="row">
		{!! Form::open(['route' => 'articulos/update', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
		{!! Form::hidden('id', $articulo->id) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Nuevo Articulo') !!}
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Descripción') !!}
							{!! Form::text('descripcion', $articulo->descripcion, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre') !!}
							{!! Form::text('nombre_articulo', $articulo->nombre_articulo, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Categoria') !!}
							{!! Form::select('categoria_id', $categorias, $articulo->categoria_id, ['id' => 'categorias', 'class' => 'form-control input-sm', 'placeholder' => 'Seleccione']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Precio') !!}
							{!! Form::text('precio', $articulo->precio, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Imagen') !!}
							<img width="40%" src="{{ asset($articulo->imagen->ruta_imagen) }}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Cambiar imagen') !!}
							<input type="file" id="imagen" name="imagen">
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
			<a href="{{ route('articulos/show', ['id' => $articulo->id]) }}" class="btn btn-danger">Regresar a Articulo</a>
		</div>
	</div>
</div>
@stop