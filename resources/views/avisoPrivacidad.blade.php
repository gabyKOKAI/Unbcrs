@extends('_master')

@section ('content')
<link rel="stylesheet" href="{{URL::asset('/css/avisoPrivacidad.css')}}" type="text/css"> 
	
<div class="containerAviso">	
	<h1 class="titterminos">TÉRMINOS DE PRIVACIDAD</h1>
	<div class="terminos">
		<p> El programa <b>UniBecarios</b> es una marca de la <b>Fundación Fomentando Talentos para México A.C.</b>, el cual ofrece sólamente la vinculación entre las empresas afiliadas y los postulantes registrados
		en el mismo </p>
		<p>Todos los estudiantes registrados en el programa <b>UniBecarios</b> son sometidos a un proceso de selección entre el programa y las empresas, de modo que UniBecarios no asegura ni se compromete a que
		todos los estudiantes serán invitados a colaborar con las empresas para las que aplican</p>
	</div>
	<div class="logoterminos">
		<!--img src= "{{URL::asset('/images/privacidad/logotipo.png')}}" alt="Planes y Programas para el futuro" class="img-responsive center-block"/-->
	</div>	
</div>

@stop

