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

/* TEST ROUTES */

Route::get('carbon', 'CarbonController@index');

Route::get('gmaps', function(){
	return view('gmapsTest');
});

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

Route::get('/', ['as' => 'home', function(){
  return view('main.index');
}]);

Route::group(['prefix' => 'registro', 'as' => 'registro.'], function()
{
	Route::get('/', ['as' => 'index', function()
	{
		return view('main.registrate');
	}]);

	Route::post('cliente', ['as' => 'cliente', 'uses' => 'ClientesController@store']);

	Route::group(['middleware' => 'auth'], function()
	{
		Route::get('cliente', ['as' => 'cliente', function()
		{
		  	return view('main.formulario-de-registro');
		}]);

		Route::post('cliente/datos',  ['as' => 'cliente.datos', 'uses' => 'ClientesController@storeCliente']);

		Route::get('mascota', ['as' => 'mascota', function(){
		  return view('main.formulario-de-mascota');
		}]);

		Route::post('mascota', ['as' => 'mascota', 'uses' => 'MascotasController@store']);

		Route::get('cuidador', ['as' => 'cuidador', function(){
		  return view('main.formulario-del-cuidador');
		}]);

		Route::post('cuidador', ['as' => 'cuidador', 'uses' => 'CuidadoresController@store']);
	});
});

Route::get('contacto', ['as' => 'contacto', function(){
  return view('main.contacto');
}]);

Route::get('perfil', ['as' => 'perfil', function(){
	return view('main.perfil');
}]);

/* OTHERS */


	/*Route::get('registro/cuidador',function(){
	  return view('main.cuidador');
	});

	Route::get('registro/cuidador2',function(){
	  return view('main.cuidador2');
	});

	Route::post('registro/cuidador2',function(){
	  return view('main.cuidador2');
	});

	Route::get('perfil',function(){
	  return view('main.perfil-del-cuidador');
	});*/
