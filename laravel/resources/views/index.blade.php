@extends('app')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>ArtMart Marketplace</h1>
			<p class="lead">Stuff goes here!</p>
		</div>
		@foreach(array_chunk($artworks->all(), 4) as $artworkRow)
			<div class="row">
				@foreach ($artworkRow as $artwork)
					<div class="col-md-3">
						<h3>{{ $artwork->title }}</h3>
						<a href="{{ $artwork->media->first()->link }}">
							<img src="{{ $artwork->media->first()->thumb }}"/>
						</a>
						<p>by {{ $artwork->user->name }}</p>
						<p><b>{{ $artwork->license->acro }}</b> - ${{ $artwork->price }}</p>
					</div>
				@endforeach
			</div>
		@endforeach
	
		{!! $artworks->render() !!}
	</div>
@stop