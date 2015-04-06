<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ArtMart</title>
	
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Montserrat'>
	<link rel="stylesheet" type='text/css' href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type='text/css' href="{{ URL::route('index', array()) }}/css/bootstrap.min.css">
	<link rel="stylesheet" type='text/css' href="{{ URL::route('index', array()) }}/css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{ URL::route('index', array()) }}/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::route('index', array()) }}">ARTMART</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::route('index', array()) }}">Browse</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<form name = "search-form">
							<i class="fa fa-search"></i>
							<input type="text" name="search"/>
						</form>
					</li>
					@if (Auth::guest())
						<li><a href="{{ URL::route('index', array()) }}/auth/login">Login</a></li> 
						<li><a href="{{ URL::route('index', array()) }}/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ URL::route('index', array()) }}/upload">Upload</a></li>
								<li><a href="{{ URL::route('index', array()) }}/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	
</body>
</html>