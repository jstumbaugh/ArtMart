<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Index Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders main "marketplace" for ArtMart.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {}

	/**
	 * Show the main marketplace.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index',
		[	'artworks'    => \App\Artwork::newest()->get() #->simplePaginate(20)
		,	'artworkshot' => \App\Artwork::hottest()->get()
		]);
	}

}
