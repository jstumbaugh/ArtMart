@extends('app')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>ArtMart Marketplace</h1>
		</div>
		@foreach(array_chunk($artworks->all(), 4) as $artworkRow)
			<div class="row">
				@foreach ($artworkRow as $artwork)
					<div class="col-sm-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>{{ $artwork->title }}</h3>
							</div>
							<div class="panel-body">
								<a href="{{ $artwork->media->first()->link }}">
									<img src="{{ $artwork->media->first()->thumb }}"/>
								</a>
								<p>by {{ $artwork->user->name }}</p>
								<p><b>{{ $artwork->license->acro }}</b> - ${{ $artwork->price }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach
	
		{!! $artworks->render() !!}
	</div>
@stop