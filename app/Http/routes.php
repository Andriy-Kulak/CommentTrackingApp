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
//Route::get('/', 'PagesController@home');
//return view('pages.recentwork')
/**
 * Home page
 */
Route::get('/', function() {
	return view('index'); // will return resourced/index.php
	});

/**
 * API Route
 */

Route::group(array('prefix' => 'api'), function ()
	{
 	//Angular will handle create and edit forms
	Route::resource('comments', 'CommentController',
		array('only' => array('index', 'store', 'destroy')));

	});

/**
 * Catch-all Route. All routes that are not home or API will be redirected to the front-end
 * so that angular will handle them.
 */
 //something wrong with this code
/*
App::missing(function($exception) {
	return view('index');
});
*/