<!--search.blade.php -->
@extends('app')

@section('content')
	@if (!empty($topResults[0]) || !empty($titleResults[0]) || !empty($descriptionResults[0]))
		@if(empty($topResults[0]))
		@else
			<div class="container">
				<div class="page-header">
					<h1>Top Results for "{{ $originalQuery }}"</h1>
				</div>
				<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner" role="listbox">
						<?php $i=0; ?>
						@foreach(array_chunk($topResults->all(), 4) as $artworkRow)
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
														<img src="{{ $artwork->media->first()->url_thumb() }}"/>
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
		@endif
		<!-- END TOP RESULTS -->
		@if(empty($tagResults))
		@else
			<div class="container">
				<div class="page-header">
					<h1>By Tag</h1>
				</div>
				<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner" role="listbox">
						<?php $i=0; ?>
						@foreach(array_chunk($tagResults, 4) as $artworkRow)
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
														<img src="{{ $artwork->media->first()->url_thumb() }}"/>
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
		@endif
		<!-- END TAG RESULTS -->
		@if(empty($titleResults[0]))
		@else
			<div class="container">
				<div class="page-header">
					<h1>By Title</h1>
				</div>
				<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner" role="listbox">
						<?php $i=0; ?>
						@foreach(array_chunk($titleResults->all(), 4) as $artworkRow)
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
														<img src="{{ $artwork->media->first()->url_thumb() }}"/>
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
		@endif
		<!-- END TITLE RESULTS -->
		@if(empty($descriptionResults[0]))
		@else
			<div class="container">
				<div class="page-header">
					<h1>By Description</h1>
				</div>
				<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner" role="listbox">
						<?php $i=0; ?>
						@foreach(array_chunk($descriptionResults->all(), 4) as $artworkRow)
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
														<img src="{{ $artwork->media->first()->url_thumb() }}"/>
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
		@endif
	@else
		<h1>No results for "{{$originalQuery}}"</h1>
	@endif
@endsection