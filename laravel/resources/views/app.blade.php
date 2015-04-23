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
	<link rel="stylesheet" type='text/css' href="{{ URL::route('index', array()) }}/css/bootstrap-tagsinput.min.css">
	<link rel="stylesheet" type='text/css' href="{{ URL::route('index', array()) }}/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::route('index', array()) }}">ARTMART</a>
				<div class = "visible-xs">
					<form class="navbar-form" role="search" name="search-collapsed">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" />
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="main-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Browse<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ URL::route('index', array()) }}">Marketplace</a></li>
							<li><a href="{{ URL::route('index', array()) }}/artists">Artists</a></li>
						</ul>
					</li>
					<li class="visible-xs"><a href="{{ URL::route('index', array()) }}">Marketplace</a></li>
					<li class="visible-xs"><a href="{{ URL::route('index', array()) }}/artists">Artists</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden-xs">
						<form class="navbar-form" role="search" name="search-main" action="search" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" name="srch_term" id="srch-term" />
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
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
	
	<div id="lightbox" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
			<div class="modal-content">
				<div class="modal-body">
					<img src="" alt="" />
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{ URL::route('index', array()) }}/js/jquery.mobile.custom.min.js"></script>
	<script src="{{ URL::route('index', array()) }}/js/bootstrap.min.js"></script>
	<script src="{{ URL::route('index', array()) }}/js/bootstrap-tagsinput.min.js"></script>
	<script src="{{ URL::route('index', array()) }}/js/app.js"></script>
	
	@yield('scripts')
</body>
</html>