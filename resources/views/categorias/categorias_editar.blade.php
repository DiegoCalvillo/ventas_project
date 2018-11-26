@extends('layouts.menu')

@section('content_categorias_editar')
<div class="container">
	@include('alerts.request')
	<h1>Categoria: {{ $categoria->nombre_categoria }}</h1>
	<div class="row">
		{!! Form::open(['route' => 'categorias/update', 'method' => 'PUT']) !!}
		{!! Form::hidden('id', $categoria->id) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Nueva Categoria') !!}
				</div>
				<div class="panel-body">
					{!! Form::text('nombre_categoria', $categoria->nombre_categoria, ['class' => 'form-control input-sm']) !!}
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
			<a href="{{ route('categorias/show', ['id' => $categoria->id]) }}" class="btn btn-danger">Regresar a Categoria</a>
		</div>
	</div>
</div>
@stop