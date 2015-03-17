@extends('app')

@section('content')
    <!-- TODO: actual marketplace content, o'course! -->
	<div class="jumbotron">
		<div class="container">
			<h1>ArtMart Marketplace</h1>
			<p>Stuff goes here!</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Register &raquo;</a></p>
		</div>
	</div>
	
	<div class="container">
		<h3>ARTWORK PLACEHOLDER LIST THING:</h3>
		@foreach($artworks as $artwork)
			<p><a href="{{ $artwork->media->first()->link }}">{{ $artwork->title }}</a></p>
		@endforeach
	
		{!! $artworks->render() !!}
	</div>
@stop