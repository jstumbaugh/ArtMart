@extends('app')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>NEWEST ART</h1>
		</div>
		@foreach(array_chunk($artworks->all(), 4) as $artworkRow)
			<div class="row">
				@foreach ($artworkRow as $artwork)
					<div class="col-md-3 panel-linkbox">
						<a href="{{ URL::route('index', array()) }}/artwork/{{ $artwork->id }}">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>{{ $artwork->title }}</h3>
								</div>
								<div class="panel-body">
									<div class="panel-image">
										<img src="{{ $artwork->media->first()->thumb }}"/>
									</div>
									<div class="panel-description">
										<ul>
											<li>by <b>{{ $artwork->user->name }}</b></li>
											<li>
												<span class="left">{{ $artwork->license->acro }}</span>
												<span class="right"><b>${{ $artwork->price }}</b></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		@endforeach
	
		{!! $artworks->render() !!}
	</div>
@stop