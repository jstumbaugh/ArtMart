<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;

class UploadController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Upload Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the upload form and the POST action for uploads.
	| User is required to be authenticated to access these methods.
	|
	*/

	/**
	 * Create a new controller instance. Require user to be authenticated.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the upload page to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('upload');
	}

	/**
	 * Post the upload data to the database.
	 *
	 * @return Response
	 */
	public function upload() {
		// get all of the post data
		$file = array('image' => Input::file('filefield'));
		
		// set up rules
		$name = "youMessedUpSomeWhere";
		$array = Input::all();
		$blah = array_slice($array, 0, 2, true);
		$name = implode("_",$blah);
 
		// do the upload
		$destinationPath = 'uploads';
		$extension = Input::file('filefield')->getClientOriginalExtension();
		$fileName = $name.'.'.$extension;
		Input::file('filefield')->move($destinationPath, $fileName);
		
		// return success
		Session::flash('success', 'Upload successfully'); 
		return Redirect::to('home');
	}
}