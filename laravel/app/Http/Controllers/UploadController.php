<?php namespace App\Http\Controllers;
use Auth;
use Input;
use Redirect;
use Request;
use DB;

class UploadController extends Controller {

/*
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
=======*/
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
		
		// get post data
		$file = array('image' => Input::file('filefield'));
		$title = Input::get('title');
    $price = Input::get('price');
    $description = Input::get('description');
    $license = Input::get('license');
    $tags = Input::get('tags');
    $id = Auth::id();

    //OPtion One for SQL
    //$artwork_id = DB::table('users')->insertGetId(
    //array('email' => 'john@example.com', 'votes' => 0)
    //);

    //Option Two
    //DB::insert('insert into artworks (user_id, license_id, title, description, price ,num_views, num_purchased) values (?, ?, ?, ?, ?, ?, ?)', array($id, $license, $title, $descripion, $price, 0, 0));
    $results = DB::select('select id from users where id = ?', array(1));
     $hello = "hello";
    echo $hello;
    echo gettype($results);
    $resultsa = (array) $results;
    $results = implode('.',$resultsa);

    //echo $results;
		// do the upload
		$destinationPath = 'uploads';
		$extension = Input::file('filefield')->getClientOriginalExtension();

    // Upload the Main Image
		$fileName = $title.'.'.$extension;
    //$fileName = $title.'.'.$results.'.'.$extension;
		Input::file('filefield')->move($destinationPath, $fileName);

   /* // Upload the Thumbnail
    $thumbnailName = $title.'_'.'thumbnail'.$extension;
    Input::file('thumbnail')->move($destinationPath, $thumbnailName);


*/
		
		//return Redirect::to('home');
	}
}

