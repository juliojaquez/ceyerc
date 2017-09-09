
@extends('admin.indexadmin')
@section('content')
<!--Sección-->
	
	{!!Html::style('css/PanelSecciones.css')!!}
	{!!Form::open(['action' => 'SeccionesController@store' , 'method' => 'POST' ,'class'=>'form-horizontal'])!!}
	<div id="panel" class="form-group">
		<h2>Agregar nueva sección.</h2>
		{!!Form::label('lbl_seccion','Sección:', ['class' => 'control-label'])!!}
		<div>
		{!!Form::text('des_seccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre sección', 'id' => 'txtSeccion'])!!}
		{!!Form::submit('Agregar sección', ['class' => 'btn btn-primary', 'id' => 'btnSeccion'])!!}	
		</div>

	{!!Form::close()!!}
	</div>

	<br>

	<div id="eliminaTitle"><h2>Eliminar o modificar sección</h2></div>
	<table class="table table-hover">
  		<tr>
  			<th>ID</th>
  			<th>NOMBRE SECCIÓN</th>
  			<th>ACCIONES</th>
  		</tr>
  		@foreach($secciones as $seccion)
  		<tr>
  			
  			<td><strong>{{$seccion->idSeccion}}</strong></td>
  			<td><strong>{{$seccion->des_nombreseccion}}</strong></td>
  			<td>{!!link_to_action('SeccionesController@edit', $title = 'ELIMINAR', $parameters = $seccion->idSeccion, $attributes = ['class'=>'btn btn-danger'])!!}</td>
  			
  		</tr>
  		@endforeach
	</table>

@endsection
	

