@extends('welcome')

@section('content')
	@foreach($secciones as $seccion)
    <div class="categorias" id="electronica">

    <a href="/catalogo_productos/{{$seccion->idSeccion}}"> {{$seccion->des_nombreseccion}} </a>

    </div>

  @endforeach
  <br>
@endsection