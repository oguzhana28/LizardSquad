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
Route::get('/groups', 'GroupsController@index');
Route::get('/groups/create', 'GroupsController@create');
Route::get('/groups/delete/{id}', 'GroupsController@delete');
Route::get('/groups/edit/{id}', 'GroupsController@edit');
Route::post('/groups/insert', 'GroupsController@insert');
Route::post('/groups/update/{id}', 'GroupsController@update');

