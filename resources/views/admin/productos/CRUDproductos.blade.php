@extends('admin.indexadmin')
@section('content')
<!--Sección-->
	
	{!!Html::style('css/PanelSecciones.css')!!}
	{!!Form::open(['action' => 'ProductoController@store' , 'method' => 'POST' ,'class'=>'form-horizontal'])!!}
	<div id="panel" class="form-group">
		{!!Form::label('lbl_producto','Agregar nuevo producto', ['class' => 'h2'])!!}
		<br>
		{!!Form::label('lbl_producto','Nombre del producto: ', ['class' => 'control-label', 'id' => 'lblproducto'])!!}
		<div>
		{!!Form::text('des_producto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del producto', 'id' => 'txtProducto'])!!}

		{!!Form::label('lbl_producto','Seccion del producto: ', ['class' => 'control-label'])!!}
		{!!Form::number('num_seccionproducto', 0, ['class'=>'form-control', 'min'=>'1', 'id' => 'num_seccion'])!!}
		<br>
		{!!Form::submit('Agregar producto', ['class' => 'btn btn-primary', 'id' => 'btnProducto'])!!}	
		</div>

	{!!Form::close()!!}
	</div>

	<br>

	<div id="eliminaTitle"><h2>Eliminar o modificar productos</h2></div>
	<table class="table table-hover">
  		<tr>
   			<th>NOMBRE SECCIÓN</th>
  			<th>SECCIÓN</th>
  		</tr>
  		@foreach($productos as $producto)
  		<tr>
  			
  			<td><strong>{{$producto->name}}</strong></td>
  			<td><strong>{{$producto->idSeccion}}</strong></td>
  			<td>{!!link_to_action('ProductoController@edit', $title = 'ELIMINAR', $parameters = $producto->id, $attributes = ['class'=>'btn btn-danger'])!!}</td>
  			
  		</tr>
  		@endforeach
	</table>

	

@endsection