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

Route::controllers(
[	'auth'     => 'Auth\AuthController'
,	'password' => 'Auth\PasswordController'
]);

Route::get('upload', function() {
  return View::make('pages.upload');
});
Route::post('apply/upload', 'ApplyController@upload');