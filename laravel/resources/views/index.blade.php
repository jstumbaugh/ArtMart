@extends('app')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>NEWEST ART</h1>
		</div>
		<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner" role="listbox">
				<?php $i=0; ?>
				@foreach(array_chunk($artworks->all(), 4) as $artworkRow)
					<div class="item @if ($i == 0) {{'active'}} @endif">
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
														<span class="aleft">{{ $artwork->license->acro }}</span>
														<span class="aright"><b>${{ $artwork->price }}</b></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</a>
							</div>
						@endforeach
					</div>
					</div>
					<?php $i++; ?>
				@endforeach
			</div>
			<a class="left carousel-control" href="#carousel-artwork-new" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-artwork-new" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="page-header">
			<h1>HOTTEST ART</h1>
		</div>
		<div id="carousel-artwork-hot" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner" role="listbox">
				<?php $i=0; ?>
				@foreach(array_chunk($artworkshot->all(), 4) as $artworkRow)
					<div class="row item @if ($i == 0) {{'active'}} @endif">
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
					<?php $i++; ?>
				@endforeach
			</div>
			<a class="left carousel-control" href="#carousel-artwork-hot" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-artwork-hot" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
@stop