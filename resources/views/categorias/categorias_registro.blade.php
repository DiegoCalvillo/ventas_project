@extends('layouts.menu')

@section('content_categorias_registro')
<div class="container">
	@include('alerts.request')
	<h1>Agregar Categoria</h1>
	<div class="row">
		{!! Form::open(['route' => 'categorias/store', 'method' => 'POST']) !!}
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! Form::label('full_name', 'Nueva Categoria') !!}
				</div>
				<div class="panel-body">
					{!! Form::text('nombre_categoria', null, ['class' => 'form-control input-sm']) !!}
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
			<a href="{{ url('/categorias') }}" class="btn btn-danger">Regresar a Catgorias</a>
		</div>
	</div>
</div>
@stop