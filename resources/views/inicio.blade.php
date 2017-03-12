<!--<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unibecarios</title>
-->
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
-->
        <!-- Styles 
		<link href="/css/style.css" type='text/css' rel='stylesheet'>
-->
<!--
    </head>
    <body>
    <header>
        <img
        src='http://making-the-internet.s3.amazonaws.com/laravel-foobooks-logo@2x.png'
        style='width:300px'
        alt='Foobooks Logo'>
    </header>

    <section>
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    UNIBECARIOS 2
                </div>

            </div>
        </div>
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>
    </body>
</html>

-->

@extends('_master')

<link rel="stylesheet" href="{{URL::asset('/css/inicio.css')}}" type="text/css">
<script type="text/javascript" src="{{URL::asset('js/inicio.js') }}"></script>

@section ('content')
	
	<!--Planes para el futuro-->
	<div class="flex-container">
		<div class="imgIzqPlanes">
		</div>	
		
		<div class="imgDerPlanes">
			<div class="imgDerPlanesTxt">
			</div>	
			<!--h1> PLANES Y PROGRAMAS</h1>
			<h1> PARA EL FUTURO </h1-->
		</div>
	</div>
	
	<!--Quienes Somos-->
	<div class="flex-container">
		<div class="imgIzqQuienes">
			<div class="imgIzqQuienesTxt">
			</div>	
		</div>	
		
		<div class="imgDerQuienes">
			<div class="imgDerQuienesTxt">
			</div>	
		</div>
	</div>
	
	<!--Colocacion arriba-->
	<div class="flex-container">
		<div class="imgArrColocacion">
			<div class="imgArrColocacionTxt">
			</div>	
		</div>
	</div>
	
	<!--Colocacion abajo-->
	<div class="flex-container">
		<div class="imgAbjColocacion">
			<div class="imgAbjColocacionTxt">
				<div class="imgCubo">
				
				<img class="imgCubo1" id="imgCubo" alt="cubo" src="" align= right;/> 
				<!--height="400px" width="600px" border="5" style="border-color:white;"
				src="{{URL::asset('/images/inicio/cubo_empresas.png')}}"/-->
				</div>
			</div>	
		</div>
	</div>
	
	<!--Programas abajo-->
	<div class="flex-container">
		<div class="imgProgramas">
		</div>
	</div>
	
@stop

