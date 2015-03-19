@extends('app')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>{{ $artwork->title }}</h1>
			<p class="lead">by {{ $author->name }}</p>
		</div>
		<div class="row">
			@foreach ($medialist as $media)
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="{{ $media->link }}" target="_blank">
								<img src="{{ $media->thumb }}"/>
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row">
			<div class = "col-sm-12">
				<p><b>License</b>: <a href="{{ $license->url }}">
					{{ $license->name }} ({{ $license->acro }})
				</a></p>
				<p><b>Price</b>: ${{ $artwork->price }}</p>
			</div>
			<p>{{ $artwork->description }}</p>
			<a href="{{ URL::route('index', array()) }}" class="btn btn-default btn-sm" role="button">
				<< Back to Browse
			</a>
		</div>
	</div>
@stop