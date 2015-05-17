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

Route::get('/', 'PageController@check');

Route::get('login', 'LoginController@index');
Route::post('login', array('uses' => 'LoginController@validasi'));

//Route::get('statusizin', 'PageController@statusizin');
Route::get('statusizin', 'IzinController@show_izinstatus');
Route::post('izin/post', 'IzinController@post');

Route::get('daftarizin', 'IzinController@show_daftarizin');
Route::post('daftarizin', 'IzinController@show_daftarizin');

Route::get('about', 'PageController@about');
Route::get('izin', 'PageController@izin');

Route::post('izinnext', 'PageController@izinnext');
Route::get('izinnext', 'PageController@izinnext');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
