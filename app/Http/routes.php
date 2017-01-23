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

/*Route::get('previa',function() {
	return view('newsletter');
});*/

Route::get('previa/lista', ['middleware' => 'auth.basic','uses' => 'PrevUsersController@listar']);

Route::resource('previa','PrevUsersController', ['only' => ['index','store','show']]);

Route::get('dev/facebook','FacebookAuthController@index');

Route::get('dev/facebook/sesion','FacebookAuthController@show');

