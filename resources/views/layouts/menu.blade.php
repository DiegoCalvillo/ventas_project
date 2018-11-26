<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	{!! Html::style('../librerias/alertifyjs/css/alertify.css') !!}
	{!! Html::style('../librerias/alertifyjs/css/themes/default.css') !!}
	{!! Html::style('../librerias/bootstrap/css/bootstrap.css') !!}
	{!! Html::style('../librerias/select2/css/select2.css') !!}
	{!! Html::style('../css/menu.css') !!}
	<!--<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">-->

	{!! Html::script('../librerias/jquery-3.2.1.min.js') !!}
	{!! Html::script('../librerias/alertifyjs/alertify.js') !!}
	{!! Html::script('../librerias/bootstrap/js/bootstrap.js') !!}
	{!! Html::script('../librerias/select2/js/select2.js') !!}
	{!! Html::script('../js/funciones.js') !!}
	<!--<script src="../librerias/jquery-3.2.1.min.js"></script>
	<script src="../librerias/alertifyjs/alertify.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script src="../librerias/select2/js/select2.js"></script>
	<script src="../js/funciones.js"></script>-->
	<title>Ventas</title>
</head>
<body>
	<div id="nav">
		<div class="navbar navbar-inverse navbar-fixed-top" data-spy="fix" data-offset-top="100">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="inicio.php"><img src="../img/ventas.jpg" alt="" width="90px" height="80px"></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            			<li class="dropdown">
              				<a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: {{ Auth::User()->name }} <span class="caret"></span></a>
                			<ul class="dropdown-menu">
                  				<li><a style="color: red;" href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
                			</ul>
            			</li>
					</ul>	
				</div>
			</div>
		</div>
	</div>
	@yield('content_index')
	@yield('content_categorias')
	@yield('content_categorias_registro')
	@yield('content_categorias_perfil')
	@yield('content_categorias_editar')
	@yield('content_articulos')
	@yield('content_articulos_registro')
	@yield('content_articulos_perfil')
	@yield('content_articulos_editar')
	@yield('content_articulos_entrada_producto')
	@yield('content_clientes')
	@yield('content_clientes_registro')
	@yield('content_clientes_perfil')
	@yield('content_clientes_editar')
	@yield('content_ventas')
	@yield('content_ventas_registro')
	@yield('content_ventas_perfil')
	@yield('content_clientes_ventas_hechas')
</body>
</html>