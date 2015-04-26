<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;

class UploadController extends Controller {

<<<<<<< HEAD
$array = Input::all();                // This pulls the fields used to name the file
$blah = array_slice($array, 1, 3, true);
$name = implode("_",$blah);
 
      $destinationPath = 'uploads'; // upload path to save the file
      $extension = Input::file('filefield')->getClientOriginalExtension(); // getting image extension
      $fileName = $name.'.'.$extension; // renameing image
      Input::file('filefield')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('home');
    }
  }
=======
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
		$user = Auth::user();
		
		// get post data
		$file = array('image' => Input::file('filefield'));
		$title = Input::get('title');
		
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
>>>>>>> origin/master
