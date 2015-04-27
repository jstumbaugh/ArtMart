<?php namespace App\Http\Controllers;

class PeopleController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| People Controller
	|--------------------------------------------------------------------------
	|
	| This controller will display all the artists in our DB.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {}

	/**
	 * Show all artists.
	 *
	 * @return Response
	 */
	public function people()
	{	
		return view('people');
		// return view('people',
		// [	'artists'    => \App\User::get_artists()->get()
		// ]);
	}
}