<?php namespace App\Http\Controllers;
use Auth;

class ArtistController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Artist Controller
	|--------------------------------------------------------------------------
	|
	| User profile page for ArtMart. Shows information about a particular user,
	| including any art they may have posted.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {}

	/**
	 * Show the artist page.
	 *
	 * @return Response
	 */
	public function index($name)
	{
		$artist = \App\User::where('name', '=', $name)->first();
		return view('artist',
		[	'artist'    => $artist
		,	'artworks'  => $artist->artworks
		]);
	}
}
