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
	public function __construct()
	{
		//[JM] Commenting this out for now; think this means the page is guests-only, which sucks.
		//$this->middleware('guest');
	}

	/**
	 * Show the main marketplace.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index', ['artworks' => \App\Artwork::orderBy('created_at')->simplePaginate(12)]);
	}

}
