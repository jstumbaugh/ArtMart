<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Routes for ArtMart
|
*/

Route::get('/',
[	'as'   => 'index'
,	'uses' => 'IndexController@index'
]);

Route::get('home',
[	'as'   => 'home'
,	'uses' => 'HomeController@index'
]);

Route::get('artwork/{id}',
[	'as'   => 'artwork'
,	'uses' => 'ArtworkController@index'
]);

Route::get('user/{name}',
[	'as'   => 'artist'
,	'uses' => 'ArtistController@index'
]);

Route::get('artists',
[	'as'   => 'people'
,	'uses' => 'PeopleController@index'
]);

Route::get('upload', function() {
  return View::make('upload');
});
Route::post('ImageUpload', 'UploadController@upload');

Route::controllers(
[	'auth'     => 'Auth\AuthController'
,	'password' => 'Auth\PasswordController'
]);

/*Route::get('upload', function() {
  return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');*/