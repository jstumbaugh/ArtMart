@extends('app')

@section('content')
	<div class="container">
				<div class="page-header">
					<h1>Artists</h1>
				</div>
				<div id="carousel-artwork-new" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner" role="listbox">
						<?php $i=0; ?>
						@foreach(array_chunk($artists->all(), 4) as $artistRow)
							<div class="item @if ($i == 0) {{'active'}} @endif">
							<div class="row">
								@foreach ($artistRow as $artist)
									<div class="col-md-3 panel-linkbox">
										<a href="{{ URL::route('index', array()) }}/user/{{ $artist->name }}">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3>{{ $artist->name }}</h3>
												</div>
												<div class="panel-body">
													<div class="panel-image">
														<img src="{{ $artist->avatar_url }}"/>
													</div>
													<div class="panel-description">
														<ul>
															<li>Homepage: <b>{{ $artist->homepage }}</b></li>
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

@endsection