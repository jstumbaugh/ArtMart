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