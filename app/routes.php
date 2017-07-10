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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello', function()
{
	// return 'Hello World';
	return View::make('hello');
});

// Route::get('/hello', 'helloController@getIndex');

Route::get('users', function()
{

	// $users = Users::all();
	// $users = Users::find(1);

	// return View::make('users')->with('users', $users);
	$users = User::all();
	return View::make('users')->with('users', $users);
});
