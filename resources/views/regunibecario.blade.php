@extends('_master')

@section ('content')
	<link rel="stylesheet" href="{{URL::asset('/css/registro.css')}}" type="text/css"> 

	<div class="formaB">
		<h2 class="tituloRegistro"> <br/> Registrate como Unibecario</h2>
		{!! Form::open(array('url'=>'/regunibecario'))!!}
		{!!Form::label('client','Nombre Completo:')!!}
		{!!Form::text('client', null, array('class'=>'form-control'))!!}
		{!!Form::label('escolaridad','Escolaridad:')!!}
		{!!Form::text('escolaridad', null, array('class'=>'form-control'))!!}
		{!!Form::label('semestre','Semestre:')!!}
		{!!Form::text('semestre', null, array('class'=>'form-control'))!!}
		{!!Form::label('email','E-mail:')!!}
		{!!Form::email('email', null, array('class'=>'form-control'))!!}
		{!!Form::label('phone','Teléfono celular:')!!}
		{!!Form::number('number', null, array('class'=>'form-control'))!!}
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::textarea('direccion', null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
		<br/>
		{!!Form::submit('Enviar', ['class' => 'botonRegistro'])!!}
	</div>
	
@stop