<!--search.blade.php -->
@extends('app')

@section('content')
<h1>This is our Search Results page!</h1>
@foreach($artworks as $artwork)
	{{ $artwork->id }}
@endforeach

@endsection