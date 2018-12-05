<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servicio becario | ITESM</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootcards CSS for desktop: -->
    <link rel="stylesheet" href="{{asset('/css/bootcards-desktop.min.css')}}">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
               @if(Auth::guest())
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size:12px;">
									Tecnológico de Monterrey
                    <!-- <img class="resized-image" alt="Brand" src="{{asset('/images/logotec.png')}}"> -->
                </a>
                @else
                <a class="navbar-brand" href="{{ url('/home') }}" style="font-size:12px;">
									Tecnológico de Monterrey
                    <!-- <img class="resized-image" alt="Brand" src="{{asset('/images/logotec.png')}}"> -->
                </a>
                @endif
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                    @if(!Auth::guest())
						@if(Auth::user()->type)
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-education"></i> Estudiantes <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{url('/students')}}">Lista de estudiantes</a></li>
									<li><a href="{{url('/students/create')}}">Ingresar estudiante</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-tower"></i> Maestros <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{url('/teachers')}}">Lista de maestros</a></li>
									<li><a href="{{url('/teachers/create')}}">Ingresar maestro</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-upload"></i> Bulks <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li>
										{!! link_to('teachers/upload','Bulk para maestros') !!}
									</li>
									<li>
										{!! link_to('students/upload','Bulk para estudiantes') !!}
									</li>
									<li>
										{!! link_to('seeders','Archivos') !!}
									</li>
								</ul>
							</li>
							<li>
								{!! HTML::decode(link_to('semester/1/edit','<i class="glyphicon glyphicon-time"></i> Semestre',null,null )) !!}
							</li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-education"></i> Mis becarios <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{url('/schoolboys')}}">Becarios</a></li>
								</ul>
							</li>
						@endif
                    @endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
                    
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"><i class="glyphicon glyphicon-user"></i> Login</a></li>
						<!--<li><a href="{{ url('/auth/register') }}">Register</a></li>-->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}"> <i class="glyphicon glyphicon-off"></i> Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
        @yield('content')
    </div>

    <script src="{{asset('/js/jquery.min.js')}}"></script>
	<!-- Typeahead -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <!-- Bootstrap and Bootcards JS -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
