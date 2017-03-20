@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/reguniversidad.css')}}" type="text/css"> 

@section ('content')

<div class="registro">
<h2> Registra tu Universidad </h2>
	<div class="forma">
		{!! Form::open(array('url'=>'/reguniversidad'))!!}
			{!!Form::label('client','Universidad:')!!}
			</br>
			{!!Form::text('client', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('contacto','Persona para contacto:')!!}
			</br>
			{!!Form::text('contacto', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('puesto','Puesto:')!!}
			</br>
			{!!Form::text('puesto', null, array('class'=>'form-control'))!!}
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