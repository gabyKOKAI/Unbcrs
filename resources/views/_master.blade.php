<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield ('title', 'Unibecarios')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- Bootstrap CSS -->
		<link href="{{URL::asset('/css/Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unibecarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" type="text/css"> 
    </head>
	
	<body>
		<div class="container">
			<div class="row">
			
				<!--Logo-->
				<div class= "col-md-10">
					<a href='/' ><img src= "{{URL::asset('/images/logo.png')}}" alt="Unibecarios Logo"/></a>
				</div>
				
				<!--Redes sociales: falta poner padding-->
				<div class= "col-md-2" id="social">
					<a href='/'><img src= "{{URL::asset('/images/fb1.png')}}" alt="Unibecarios Facebook"/></a>
					<a href='/'><img src= "{{URL::asset('/images/linkedin.png')}}" alt="Unibecarios Linkedin"/></a>
					<a href='/'><img src= "{{URL::asset('/images/twitter.png')}}" alt="Unibecarios Twitter"/></a>
				</div>
			</div>
			
			<div class="row">
				<!--Menu-->
					<div class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right" id="">
								<li id="navpart1"><a href='/somos'>QUIENES SOMOS </a></li>
								<li id="navpart2"><a href='/empresas'>EMPRESAS</a></li>
								<li id="navpart3"><a href='/estudiantes'>ESTUDIANTES</a></li>
								<!--li id="navpart4"><a href='/becarios'>BECARIOS</a></li-->
								<li id="navpart5"><a href='/universidades'>UNIVERSIDADES</a></li>
								<li id="navpart5"><a href='/blog'>BLOG</a></li>
							</ul>
						</div>
					</div>
			</div>
			
			@yield('content')
			
		</div>
		
		<footer class="footer">
			<div class="container">
				<div class= "col-md-3">
					<img src= "{{URL::asset('/images/logoSoloFooter.png')}}" alt="Unibecarios Footer" class="img-responsive center-block"/>
				</div>
				<div class= "col-md-9">
				</br>
					<ul class="list-inline">
						<li><a href='/somos'>QUIENES SOMOS |</a></li>
						<li><a href='/empresas'>EMPRESAS | </a></li>
						<li><a href='/estudiantes'>ESTUDIANTES | </a></li>
						<li><a href='/universidades'>UNIVERSIDADES | </a></li>
						<li><a href='/'>REGISTRO DE EMPRESAS | </a></li>
						<li><a href='/'>REGISTRO DE ESTUDIANTES | </a></li>
						<li><a href='/'>REGISTRO DE UNIVERSIDADES | </a></li>
						<!--<li><a href='/'>TIPS PARA BECARIOS | </a></li>-->
						<li><a href='/blog'>BLOG | </a></li>
						<li><a href='/'>TÉRMINOS DE PRIVACIDAD | </a></li>
						<li><a href='/'>CONTÁCTANOS </a></li>	
					</ul>
				</div>
				<div class="copyright">
					<p>UNIBECARIOS 2017 &copy; TODOS LOS DERECHOS RESERVADOS</p>
				</div>			
			</div>
		</footer>
		
			<!-- Bootstrap jQuery -->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>
	  </body>
</html>