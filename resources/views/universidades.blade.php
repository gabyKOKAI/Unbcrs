@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/universidades.css')}}" type="text/css"> 

@section ('content')
	
	<!--Recursos Economicos-->
	<div class="flex-container">	
		<div class="imgUniversidades">
			<div class="imgBeneficiosUniv">
			</div>
		</div>
	</div>
	
	<div class="flex-container">	
		<div class="imgRegUniversidades">
		<div class="imgRegUniversidadesTxt">
			<div class="imgBotRegUniv">
			</div>
			<a href="https://www.w3schools.com/html/">
				<img class="imgBotRegUniv"
				src="{{URL::asset('/images/universidades/btnRegistroUniv.png')}}"
				onmouseover="this.src='{{URL::asset('/images/universidades/btnRegistroUnivUnd.png')}}';"
				onmouseout="this.src='{{URL::asset('/images/universidades/btnRegistroUniv.png')}}';"
				alt="REGISTRO DE UNIVERSIDADES"
				/>
			</a>
		</div>
		
		</div>

	</div>
	
@stop

