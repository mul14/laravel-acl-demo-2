<?php

Route::controller('auth', 'AuthController');

Route::get('/', 'BackendController@index');

Route::get('users/create', 'UserController@create');
Route::get('users/{id}/edit', 'UserController@edit');
Route::get('users/{id}/delete', 'UserController@destroy');
