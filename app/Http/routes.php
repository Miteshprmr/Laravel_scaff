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

Route::group(['prefix' => 'admin'], function () {

	Route::get('', ['as' => 'admin.dashboard', 'uses' => 'Admin\AdminController@getDashboard']);
	// Authentication Routes
	Route::get('login', ['as' => 'admin.login', 'uses' => 'Admin\AdminAuthController@getLogin']);
	Route::post('login', 'Admin\AdminAuthController@postLogin');
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Admin\AdminAuthController@getLogout']);
	
});