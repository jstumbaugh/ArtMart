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

Route::controllers(
[	'auth'     => 'Auth\AuthController'
,	'password' => 'Auth\PasswordController'
]);
