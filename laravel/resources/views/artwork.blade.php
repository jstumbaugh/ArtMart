@extends('app')

@section('content')
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<div class="container">
		<div class="page-header">
			<h1>{{ $artwork->title }} <span class="lead">by</span>
				<a href="{{ URL::route('index', array()) }}/user/{{$author->name}}">
					{{ $author->name }}
				</a>
			</h1>
		</div>
		<div id="carousel-media" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
				<?php $i=0; ?>
				@foreach ($medialist as $media)
					<li data-target="#carousel-media" data-slide-to="{{ $i }}" class="@if ($i == 0) {{'active'}} @endif"></li>
					<?php $i++; ?>
				@endforeach
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php $i=0; ?>
				@foreach ($medialist as $media)
					<div class="item @if ($i == 0) {{'active'}} @endif">
						<div class="carousel-imagebox">
							<span class="carousel-helper"></span>
							<a href="#" data-toggle="modal" data-target="#lightbox">
								<img src="{{ $media->url_link() }}" alt="...">
							</a>
						</div>
					</div>
					<?php $i++; ?>
				@endforeach
			</div>
			<a class="left carousel-control" href="#carousel-media" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-media" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container container-spacer">
		<div class="row row-equal">
			<div class="col-sm-5 col-sm-push-7">
				<div class="panel panel-default">
					<div class="panel-body">
						<p><b>License</b>: <a href="{{ $license->url }}">
							{{ $license->name }} @if($license->acro != "") ({{ $license->acro }}) @endif
						</a></p>
						<p><b>Price</b>: ${{ $artwork->price }}</p>
						<p><b>Tags</b>:
							<?php $i=1; ?>
							@foreach ($tags as $tag)
								<a href="{{ URL::route('index', array()) }}/search?srch_term={{ $tag->name }}">{{ $tag->name }}</a>@if( $i < count($tags)), @endif
								<?php $i++; ?>
							@endforeach
						</p>
						<!-- Payment Button Goes Here -->
						<form action="" method="">
							<script
								src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								data-key="pk_test_BwFKU2ablxqgWyl93vGAHTzx"
								data-amount="{{ $artwork->price * 100}}"
								data-name="{{$artwork->title}}"
								data-description="${{ $artwork->price }}"
								data-image="{{ $medialist[0]->url_thumb() }}">
							</script>
						</form>


						<!-- <button id="customButton">Purchase</button> -->

					</div>
				</div>
			</div>
			<div class="col-sm-7 col-sm-pull-5">
				<div class="panel panel-default">
					<div class="panel-body">
						<p>{{ $artwork->description }}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<a href="{{ URL::previous() }}" class="btn btn-default btn-md btn-block" role="button">&lt;&lt; Back</a>
			</div>
		</div>
	</div>
</div>
@stop