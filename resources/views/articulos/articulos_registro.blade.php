@extends('layouts.menu')

@section('content_articulos_registro')
<div class="container">
	@include('alerts.request')
	<h1>Agregar Articulo</h1>
	<div class="row">
		{!! Form::open(['route' => 'articulos/store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Nuevo Articulo') !!}
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Descripción') !!}
							{!! Form::text('descripcion', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre') !!}
							{!! Form::text('nombre_articulo', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Categoria') !!}
							{!! Form::select('categoria_id', $categorias, null, ['id' => 'categorias', 'class' => 'form-control input-sm', 'placeholder' => 'Seleccione']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Cantidad') !!}
							{!! Form::text('cantidad', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{!! Form::label('full_name', 'Precio') !!}
							{!! Form::text('precio', null, ['class' => 'form-control input-sm']) !!}
						</div>
					</div>
					<div class="col-sm-12">
						{!! Form::label('full_name', 'Imagen') !!}
						<input type="file" id="imagen" name="imagen">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
			<a href="{{ url('/articulos') }}" class="btn btn-danger">Regresar a Articulos</a>
		</div>
	</div>
</div>
@stop