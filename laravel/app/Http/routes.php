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




Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('game-create', 'WizardController@index');

Route::get('wizard1', 'WizardController@wizard1');

Route::get('wizard2', 'WizardController@wizard2');

Route::get('wizard3', 'WizardController@wizard3');

Route::get('wizard4', 'WizardController@wizard4');

Route::get('profile', 'ProfileController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
