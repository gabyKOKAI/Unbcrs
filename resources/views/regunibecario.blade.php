@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/regunibecario.css')}}" type="text/css"> 

@section ('content')

<div class="registro">
<h2> Regístrate como Unibecario </h2>
	<div class="forma">
		{!! Form::open(array('url'=>'/regunibecario'))!!}
			{!!Form::label('client','Nombre Completo:')!!}
			</br>
			{!!Form::text('client', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('escolaridad','Escolaridad:')!!}
			</br>
			{!!Form::text('escolaridad', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('semestre','Semestre:')!!}
			</br>
			{!!Form::text('semestre', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('email','E-mail:')!!}
			</br>
			{!!Form::email('email', null, array('class'=>'form-control'))!!}
			<br><br>
			{!!Form::label('phone','Teléfono celular:')!!}
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