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
				<div class= "col-md-9">
					<a href='/' ><img src= "{{URL::asset('/images/logo.png')}}" alt="Unibecarios Logo"/></a>
				</div>
				
				<!--Redes sociales: falta poner padding-->
				<div class= "col-md-3">
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
							<ul class="nav navbar-nav navbar-right">
								<li id="navpart1"><a href='/somos'>QUIENES SOMOS </a></li>
								<li id="navpart2"><a href='/empresas'>EMPRESAS</a></li>
								<li id="navpart3"><a href='/estudiantes'>ESTUDIANTES</a></li>
								<li id="navpart4"><a href='/becarios'>BECARIOS</a></li>
								<li id="navpart5"><a href='/universidades'>UNIVERSIDADES</a></li>
								<li id="navpart5"><a href='/blog'>BLOG</a></li>
							</ul>
						</div>
					</div>
			</div>
			
			@yield('content')
			
		</div>
		
		<div class="footer">
			<p>Copyright (c) 2008 </p>
		</div>
		
			<!-- Bootstrap jQuery -->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>
	  </body>
</html>