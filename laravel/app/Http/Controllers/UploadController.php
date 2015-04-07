<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class UploadController extends Controller {


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

    $entries;

    return view('upload', []);
  }

  
  public function upload() 
{

 /*$file = Request::file('filefield');
    $extension = $file->getClientOriginalExtension();
    Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
    $entry = new Fileentry();
    $entry->mime = $file->getClientMimeType();
    $entry->original_filename = $file->getClientOriginalName();
    $entry->filename = $file->getFilename().'.'.$extension;
 
    $entry->save();*/
 
    //return redirect('fileentry');
  /*
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) 
  {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else 
  {
    // checking file is valid.
    if (Input::file('image')->isValid()) 
    {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else 
    {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }*/
  //return Redirect::to('upload');
}

}