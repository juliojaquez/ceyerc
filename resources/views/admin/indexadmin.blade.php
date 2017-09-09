<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/main.css')!!}
</head>
<body>

	

    <!--Menú de navegación-->
    <aside>
	<div id="menuTitle"><h1>Menú</h1></div>
		<ul>
			<li><a href="../admin/secciones">Secciones</a></li>
			<li><a href="/admin">Productos</a></li>
			<li><a href="/admin">Imagenes</a></li>
		</ul>
	</aside>
  

	<br>
	<div>
	@yield('content')
	</div>
	  
	
	
	

</body>
</html>


