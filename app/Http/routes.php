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
Route::get('/', function () {
    return redirect('previa');
});


Route::resource('previa','PrevUsersController', ['only' => ['index','store']]);

Route::get('previa/lista', ['middleware' => 'auth.basic','uses' => 'PrevUsersController@listar']);


Route::get('dev/facebook','Auth\AuthController@redirectToProvider');

Route::get('dev/facebook/sesion','Auth\AuthController@handleProviderCallback');


Route::group(['prefix' => 'preview','middleware' => 'auth.basic'],function(){
	Route::get('/',function(){
	  return view('main.index');
	});

	Route::get('registro',function(){
	  return view('main.registrate');
	});

	Route::get('registro/form',function(){
	  return view('main.formulario-de-registro');
	});

	Route::get('preview/registro/cliente',function(){
	  return view('main.cliente');
	});

	Route::get('preview/registro/cuidador',function(){
	  return view('main.cuidador');
	});

	Route::get('preview/login',function(){
	  return view('main.iniciar-sesion');
	});

	Route::get('preview/prefil',function(){
	  return view('main.prefil-del-cuidador');
	});

	Route::get('preview/contacto',function(){
	  return view('main.contacto');
	});
});



/*Route::get('/', array('as' => '/', 'uses' => function(){
  return view('welcome');
}));*/
