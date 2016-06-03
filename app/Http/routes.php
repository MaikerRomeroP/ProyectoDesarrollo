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

Route::group(['middleware' => 'web'], function () {
	Route::get('login', ['as' => 'login.index', 'uses' => 'LoginController@index']);
	Route::post('login', ['as' => 'login.ingresar', 'uses' => 'LoginController@ingresar']);
    Route::group(['middleware' => 'auth'], function(){
		Route::get('salir', ['as' => 'login.salir', 'uses' => 'LoginController@salir']);
    	Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
        Route::get('usuarios/{id}/password', ['as' => 'usuarios.password', 'uses' => 'UsuarioController@getPassword']);
        Route::post('usuarios/{id}/password', ['as' => 'usuarios.password', 'uses' => 'UsuarioController@postPassword']);
        Route::resource('usuarios', 'UsuarioController');
    	Route::resource('actas', 'ActaController');
    	Route::resource('acuerdos', 'AcuerdoController');
    	Route::resource('seguimientos', 'SeguimientoController');
    });
});