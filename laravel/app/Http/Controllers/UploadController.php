<?php namespace App\Http\Controllers;
use Auth;
use Input;
use Redirect;
use Request;
use DB;

class UploadController extends Controller {

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
		
		// do the upload
		$destinationPath = 'uploads';
		$extension = Input::file('filefield')->getClientOriginalExtension();
		
		// Upload the Main Image
		$fileName = $title.'.'.$extension;
		$fileName = $title.'_'.$id.'.'.$extension;
		Input::file('filefield')->move($destinationPath, $fileName);
		
		// Upload the Thumbnail
		$thumbnailName = $title.'_'.'thumbnail.'.$extension;
		Input::file('thumbnail')->move($destinationPath, $thumbnailName);
	

		//Add to artworks Table First.
		$lastArt = DB::table('artworks')->insertGetId(array(
			'user_id'     => $id
		,	'license_id'  => $license
		,	'title'       => $title
		,	'description' => $description
		,	'price'       => $price
		));
		
		//Then Media.
		$mediaId = DB::table('media')->insertGetId(array(
			'artwork_id' => $lastArt
		,	'type_id'    => 1
		,	'order'      => 1
		,	'link'       => $fileName
		,	'thumb'      => $thumbnailName
		));
		
		//Lastly the Tags Table.
		//TODO tags

    $tags = str_replace(' ', '', $tags);
    $tagsArray = explode(',', $tags);

    foreach( $tagsArray as $tag){
        $tagId = DB::table('tags')->insertGetId(array(
        'artwork_id' => $lastArt
        ,'name' => $tag
    ));
    }

		
		// Redirect to the most recently added artwork.
		$redirectAddress = route('artwork', ['id' => $lastArt]);
		return Redirect::to($redirectAddress);
	}
}

