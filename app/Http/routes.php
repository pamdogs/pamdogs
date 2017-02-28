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

/*Route::get('/',['middleware' => 'auth.basic', function () {
    return redirect('preview');
}]);*/
/*Route::get('/', function () {
    return redirect('preview');
});*/

	Route::get('/',function(){
	  return view('main.index');
	});

	Route::get('registro',function(){
	  return view('main.registrate');
	});

	Route::get('registro/form',function(){
	  return view('main.formulario-de-registro');
	});

	Route::post('registro/form','ClientesController@store');

	Route::post('registro/cliente','ClientesController@storeCliente');

	/*Route::get('registro/cliente',function(){
		return view('main.formulario-mascota');
	});*/

	Route::post('registro/mascota','MascotasController@store');

	/*Route::get('registro/cliente',function(){
	  return view('main.cliente');
	});*/

	Route::get('registro/cuidador',function(){
	  return view('main.cuidador');
	});

	Route::get('registro/cuidador2',function(){
	  return view('main.cuidador2');
	});

	Route::post('registro/cuidador2',function(){
	  return view('main.cuidador2');
	});

	/*Route::get('login',function(){
	  return view('main.iniciar-sesion');
	});*/

	Route::get('perfil',function(){
	  return view('main.perfil-del-cuidador');
	});

	Route::get('contacto',function(){
	  return view('main.contacto');
	});

Route::group(['middleware' => 'auth'], function(){

});

	// Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');

Route::resource('previa','PrevUsersController', ['only' => ['index','store']]);

Route::get('previa/lista', ['middleware' => 'auth.basic','uses' => 'PrevUsersController@listar']);

Route::get('dev/facebook','Auth\AuthController@redirectToProvider');

Route::get('dev/facebook/sesion','Auth\AuthController@handleProviderCallback');

/*Route::get('/', array('as' => '/', 'uses' => function(){
  return view('welcome');
}));*/