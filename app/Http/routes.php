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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Profile controller routes

Route::get('/profile', 'UserController@index');
Route::get('/profile/edit', 'UserController@edit');
Route::post('/fileupload', 'UserController@fileUpload');

//Tasks controller routes
Route::resource('tasks', 'TaskController');

/*Route::get('/tasks', 'TaskController@index');
Ruute::get('/tasks/create', 'TaskController@create');*/
