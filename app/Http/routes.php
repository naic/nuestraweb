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

Route::get('/', 'WelcomeController@index');
/*
_________________________HOME_________________________________________________
*/
Route::get('home', 'HomeController@index');
Route::get('nosotros','HomeController@nosotros');
/*
_________________________SERVICIOS____________________________________________
*/
Route::get('servicios/redes', 'ServiciosController@index');
Route::get('servicios/soporte', 'ServiciosController@index');
Route::get('servicios/desarrollo', 'ServiciosController@index');
/*
_________________________NOSOTROS_____________________________________________
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
