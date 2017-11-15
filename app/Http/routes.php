<?php

Route::get('/tasks', 'taskController@index');

Route::get('/tasks/{task}', 'taskController@show');

Route::get('/', 'taskController@welcome');

Route::get('/posts', 'postsController@index');






