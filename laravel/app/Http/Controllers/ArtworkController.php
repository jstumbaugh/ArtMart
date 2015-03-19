<?php namespace App\Http\Controllers;

class ArtworkController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Artwork Controller
	|--------------------------------------------------------------------------
	|
	| "Art view" page for ArtMart. Shows all artwork media and lists detailed
	| information for a singular piece of artwork.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}
	
	/**
	 *
	 */
//	public function boot(Router $router)
//	{
//		parent::boot($router);
//		$router->model('artwork', '\App\Artwork');
//	}

	/**
	 * Show the main marketplace.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		//$artwork = \App\Artwork::get($artid);
		//$artwork =  $this->artwork->find($id);
		//$artwork = $id;
		$artwork = \App\Artwork::where('id', '=', $id)->first();
		return view('artwork',
		[	'artwork'   => $artwork
		,	'author'    => $artwork->user
		,	'license'   => $artwork->license
		,	'medialist' => $artwork->media
		]);
	}
}
