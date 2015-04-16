@extends('app')

@section('content')
	<div class="container">
	</div>
	<div class="container container-spacer">
		<div class="row row-equal">
			<div class="col-sm-3">
				<div class="panel panel-default ">
					<div class="panel-heading">
						<h1>{{ $artist->name }}</h1>
					</div>
					<div class="panel-body">
						<div class="panel-image-short panel-image">
							<img src="{{ $artist->avatar_url }}"/>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="panel panel-default">
					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>User Name:</dt>
							<dd>{{ $artist->name }}</dd>
							<dt>Real Name:</dt>
							<dd>{{ $artist->firstname }} {{ $artist->lastname }}</dd>
							<dt>Email:</dt>
							<dd><a href="mailto:{{ $artist->email }}">{{ $artist->email }}</a></dd>
							<dt>Homepage:</dt>
							<dd><a href="{{ $artist->homepage }}">{{ $artist->homepage }}</a></dd>
						</dl>
						<p>{{ $artist->biography }}</p>
					</div>
				</div>
			</div>
		</div>
		<div id="carousel-artwork" class="carousel slide" data-ride="carousel" data-interval="false">
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
			<a class="left carousel-control" href="#carousel-artwork" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-artwork" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href="{{ URL::route('index', array()) }}" class="btn btn-default btn-md btn-block" role="button">&lt;&lt; Back</a>
			</div>
		</div>
	</div>
</div>
@stop