<?php namespace App\Http\Controllers;

class SearchController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller displays search results given a query string.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {}

	/**
	 * Show the search results to the user.
	 *
	 * @return Response
	 */
	public function search($query)
	{
		var_dump($query);
		return view('search',
		[	'artworks' => \App\Artwork::search($query)->get()	
		]);
	}

}