<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'auth', function () {
	return view('welcome');
}])->name('inicio');

Route::get("login", function(){
	return view("login.login");
});

//users

Route::resource('user', 'UserController', ['only' => [
	'create', 'store', 'destroy', 'update'
	]]);

Route::get('user', [
	'middleware' => 'auth',
	'as' => 'user.index',
	'uses' => 'UserController@index'
	]);

Route::get('user/{user}', [
	'middleware' => 'auth',
	'as' => 'user.show',
	'uses' => 'UserController@show'
	]);

Route::get('user/{user}/edit', [
	'middleware' => 'auth',
	'as' => 'user.edit',
	'uses' => 'UserController@edit'
	]);

// login

Route::get('login',[
	'as' => 'login',
	'uses' => 'LoginController@index'
	]);
Route::post('authenticate', [
	'as' => 'authenticate',
	'uses' => 'LoginController@authenticate'
	]);
Route::get('logout', [
	'as' => 'logout',
	'uses' => 'LoginController@logout'
	]);