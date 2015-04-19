<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
class UploadController extends Controller {
public function upload() {
  // getting all of the post data
  $file = array('image' => Input::file('filefield'));
  // setting up rules
  $name = "youMessedUpSomeWhere";

$array = Input::all();
$blah = array_slice($array, 0, 2, true);
$name = implode("_",$blah);
 
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('filefield')->getClientOriginalExtension(); // getting image extension
      $fileName = $name.'.'.$extension; // renameing image
      Input::file('filefield')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('home');
    }
  }