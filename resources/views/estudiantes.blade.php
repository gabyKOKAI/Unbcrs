@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/empresas.css')}}" type="text/css"> 

@section ('content')
	
	<!--Recursos Economicos-->
	<div class="flex-container">	
		<div class="imgRecursos">
			<div class="titEmpresas">
				<div class="imgRecursosTxt">
				</div>
			</div>	
		</div>
	</div>
	
	<!--Compromiso Sociedad-->
	<div class="flex-container">	
		<div class="imgCompromiso">
			<div class="imgCompromisoTxt">
			</div>	
		</div>
	</div>
	
	<!--Ahorre Tiempo-->
	<div class="flex-container">	
		<div class="imgAhorreTiempo">
			<div class="imgAhorreTiempoTxt">
			</div>	
		</div>
	</div>
	
@stop

