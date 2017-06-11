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

/* PRODUCTION ROUTES */

// Web Previa
Route::resource('previa','PrevUsersController', ['only' => ['index','store']]);
Route::get('previa/lista', ['middleware' => 'auth.basic','uses' => 'PrevUsersController@listar']);

// Authentication routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Facebook Authentication
Route::get('dev/facebook', ['as' => 'facebook', 'uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('dev/facebook/sesion','Auth\AuthController@handleProviderCallback');

//Probar solo con Route::get()
Route::any('{path?}', function()
{
	return view("index");
})->where("path", ".+");

Route::group(['prefix' => '/api', 'as' => 'api.'], function()
{
	Route::resource('user','UserController');
});
