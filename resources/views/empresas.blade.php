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
				<div class="divBotRegEmpr">
				</div>
				<a href="https://www.w3schools.com/html/">
					<img class="imgBotRegEmpr"
					src="{{URL::asset('/images/empresas/btnRegistroEmpr.png')}}"
					onmouseover="this.src='{{URL::asset('/images/empresas/btnRegistroEmprUnd.png')}}';"
					onmouseout="this.src='{{URL::asset('/images/empresas/btnRegistroEmpr.png')}}';"
					alt="REGISTRO DE EMPRESAS"
					/>
				</a>
			</div>	
		</div>
	</div>
	
	<!--Ahorre Tiempo-->
	<div class="flex-container">	
		<div class="imgAhorreTiempo">
			<div class="imgAhorreTiempoTxt">
				<div class="div2BotRegEmpr">
				</div>
				<a href="https://www.w3schools.com/html/">
					<img class="imgBotRegEmpr"
					src="{{URL::asset('/images/empresas/btnRegistroEmpr1.png')}}"
					onmouseover="this.src='{{URL::asset('/images/empresas/btnRegistroEmprUnd1.png')}}';"
					onmouseout="this.src='{{URL::asset('/images/empresas/btnRegistroEmpr1.png')}}';"
					alt="REGISTRO DE EMPRESAS"
					/>
				</a>
			</div>	
		</div>
	</div>
	
@stop

