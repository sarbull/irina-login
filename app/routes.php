<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'root', function() {
  return View::make('pages.index');
}]);

Route::get('login', [
	'as'   => 'login',
	'uses' => 'LoginsController@index'
]);

Route::post('login', [
	'as'   => 'login',
	'uses' => 'LoginsController@update'
]);

Route::get('register', [
	'as'   => 'register',
	'uses' => 'LoginsController@create'
]);

Route::post('register', [
	'as'   => 'register',
	'uses' => 'LoginsController@store'
]);

Route::get('logout', [
	'as'   => 'logout',
	'uses' => 'LoginsController@destroy'
]);
