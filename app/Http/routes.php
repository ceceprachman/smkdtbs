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

get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

resource('admin', 'AdminController');

get('all-users', [
    'as' => 'admin.all',
    'uses' => 'AdminController@all'
]);

get('operators', [
    'as' => 'admin.operators',
    'uses' => 'AdminController@operators'
]);

get('teachers', [
    'as' => 'admin.teachers',
    'uses' => 'AdminController@teachers'
]);