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
use Illuminate\Http\Request;


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/groups', 'GroupsController@index');
Route::get('/groups/create', 'GroupsController@create');
Route::get('/groups/delete/{id}', 'GroupsController@delete');
Route::get('/groups/edit/{id}', 'GroupsController@edit');
Route::get('/groups/view/{id}', 'GroupsController@view');
Route::get('/', 'GroupsController@admin');
Route::post('/groups/insert', 'GroupsController@insert');
Route::post('/groups/update/{id}', 'GroupsController@update');
Route::get('/groups/index/id', 'GroupsController@');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/view/{id}', 'StudentsController@view');
Route::post('/upload', 'StudentsController@upload');
Route::get('students/edit/{id}', 'StudentsController@edit');
Route::post('/students/update/{id}', 'StudentsController@update');

Route::get('/students/delete/{id}', 'StudentsController@delete');

Route::get('/csv', 'CsvController@index');
Route::post('/readCsv', 'CsvController@upload');
Route::post('/selectAndImport', 'CsvController@selectAndImport');
Route::post('/insertIntoDB', 'CsvController@insertIntoDB');