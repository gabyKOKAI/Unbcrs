@extends('_master') 

@section ('content')
	<link rel="stylesheet" href="{{URL::asset('/css/estudiantes.css')}}" type="text/css">
	
	<div class="flex-container">	
		<div class="fondoEstudiantes">
			<div class="divBotRegBec">
			</div>
			<div class="divContainer">
				<div class="divBotRegBec1">
				
				</div>
				<div class="divBotRegBec1">
				
				</div>
				<div class="divBotRegBec1">
				<a href="{{ url('regunibecario') }}">
					<img class="imgBotRegBec"
					src="{{URL::asset('/images/estudiantes/btnRegistroBecarios.png')}}"
					onmouseover="this.src='{{URL::asset('/images/estudiantes/btnRegistroBecariosUnd.png')}}';"
					onmouseout="this.src='{{URL::asset('/images/estudiantes/btnRegistroBecarios.png')}}';"
					alt="REGISTRO DE Becarios"
					/>
				</a>
				</div>
				<div class="divBotRegBec1">
				<a href="{{ url('regunibecario') }}">
					<img class="imgBotRegBecFB"
					src="{{URL::asset('/images/estudiantes/btnRegistroBecariosFB.png')}}"
					onmouseover="this.src='{{URL::asset('/images/estudiantes/btnRegistroBecariosFBUnd.png')}}';"
					onmouseout="this.src='{{URL::asset('/images/estudiantes/btnRegistroBecariosFB.png')}}';"
					alt="CONSULTA VACANTES FB"
					/>
				</a>
				</div>
			</div>
		</div>
	</div>
	
@stop

