@extends('welcome')

@section('content')
 
	@foreach($productos as $producto)
	
 	
 	<div id="divProductos">
		<div id="idTexto">Rayos X chingones</div>
 		<img width = "250" height = "250" src="../img/{{$producto->name}}.jpg" alt="Logo" class="img-logo"><br>
 		<button class="btn btn-primary">Ver más</button>
 	</div>
	@endforeach


  	
@endsection