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
,	'uses' => 'PeopleController@people'
]);

Route::get('upload',
[	'as'         => 'upload_form'
,	'uses'       => 'UploadController@index'
,	'middleware' => 'auth'
]);

Route::get('search', 
[ 	'as' 	=> 'search'
,	'uses' => 'SearchController@search'
]);

Route::post('ImageUpload',
[	'as'         => 'upload_post'
,	'uses'       => 'UploadController@upload'
,	'middleware' => 'auth'
]);

Route::controllers(
[	'auth'     => 'Auth\AuthController'
,	'password' => 'Auth\PasswordController'
]);