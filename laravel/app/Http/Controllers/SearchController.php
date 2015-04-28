<?php namespace App\Http\Controllers;
use Request;

class SearchController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Search Controller
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
		$query = Request::query("srch_term");
		return view('search',
		[	'topResults' => \App\Artwork::topSearch($query)->get(),
			'titleResults' => \App\Artwork::titleSearch($query)->get(),
			'descriptionResults' => \App\Artwork::descriptionSearch($query)->get(),
			'originalQuery' => $query
		]);
	}

}