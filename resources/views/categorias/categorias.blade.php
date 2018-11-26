@extends('layouts.menu')

@section('content_categorias')
<div class="container">
	@include('alerts.success')
	@include('alerts.errors')
	<h1>Categorias</h1>
	<div class="row">
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
								<th>Categoria</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categorias as $categoria)
								<tr>
									<td>{{ $categoria->id }}</td>
									<td>
										<a href="{{ route('categorias/show', ['id' => $categoria->id]) }}">{{ $categoria->nombre_categoria }}</a>
									</td>
									<td>
										<a href="{{ route('categorias/edit', ['id' => $categoria->id]) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="{{ route('categorias/create') }}" class="btn btn-primary">Agregar</a>
		</div>
	</div>
</div>
@stop