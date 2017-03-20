@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/regempresa.css')}}" type="text/css"> 

@section ('content')

<div class="registro">
<h2> Registra tu Empresa </h2>
	<div class="forma">
		{!! Form::open(array('url'=>'/regempresa'))!!}
			{!!Form::label('client','Nombre de la Empresa:')!!}
			</br>
			{!!Form::text('client', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('contacto','Persona para contacto:')!!}
			</br>
			{!!Form::text('contacto', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('rubro','Rubro:')!!}
			</br>
			{!!Form::text('rubro', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('phone','Teléfono:')!!}
			</br>
			{!!Form::number('number', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('direccion','Dirección:')!!}
			</br>
			{!!Form::textarea('direccion', null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
			<br>
			{!!Form::submit('Enviar', ['class' => 'btn btn-large btn-primary openbutton'])!!}
			<br><br>
	</div>
</div>


@stop