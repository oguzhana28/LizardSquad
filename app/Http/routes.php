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

	$name = 'Chess Master';

	$tasks = DB::table('tasks')->get();

	return $tasks;
    //return view('welcome', compact('tasks', 'name'));
});

Route::get('about', function () {
    return view('about');
});

Route::get('/tasks/{task}', function ($id) {
	$task = DB::table('tasks')->find($id);
	dd($task);

	return view('welcome', compact('tasks'));	
});