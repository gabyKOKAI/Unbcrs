@extends('_master')

@section ('content')
	<link rel="stylesheet" href="{{URL::asset('/css/registro.css')}}" type="text/css"> 

	<div class="formaU">
		<h2 class="tituloRegistro"> <br/> Registra tu Universidad </h2>
		{!!Form::open(array('url'=>'/reguniversidad'))!!}
		{!!Form::label('client','Universidad:')!!}
		{!!Form::text('client', null, array('class'=>'form-control'))!!}
		{!!Form::label('contacto','Persona para contacto:')!!}
		{!!Form::text('contacto', null, array('class'=>'form-control'))!!}
		{!!Form::label('puesto','Puesto:')!!}
		{!!Form::text('puesto', null, array('class'=>'form-control'))!!}
		{!!Form::label('phone','Teléfono:')!!}
		{!!Form::number('number', null, array('class'=>'form-control'))!!}
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::textarea('direccion', null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
		<br/>
		{!!Form::submit('Enviar', ['class' => 'botonRegistro'])!!}
	</div>

@stop