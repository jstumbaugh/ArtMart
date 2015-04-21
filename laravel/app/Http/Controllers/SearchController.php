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
	public function search()
	{
		//$results = \App\Search::search()->get();
		return view('search');
	}

}