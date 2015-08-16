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
Route::get('/', 'HomeController@index');

/**
 * API Route
 */

Route::group(array('prefix' => 'api'), function ()
	{
 	//Angular will handle create and edit forms
	Route::resource('comments', 'CommentController',
		['only' => ['index', 'store', 'destroy']]);
	});

/**
 * Catch-all Route. All routes that are not home or API will be redirected to the front-end
 * so that angular will handle them.
 */
 //something wrong with this code. I added exception in handler.php (line 38-42) to handle all exceptions.
/*
App::missing(function($exception) {
	return view('index');
});
*/