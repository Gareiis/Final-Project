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




Route::get('home', 'WizardController@gameNames');

// Route::get('get-games','WizardController@gameNames');

Route::get('/', 'HomeController@index');

Route::get('game-create', 'WizardController@index');

Route::post('game-create/add', 'WizardController@addGame');

Route::get('wizard1/{game_id}', 'WizardController@wizard1');

Route::post('wizard1/add', 'WizardController@addFormat');

Route::get('wizard2/{game_id}', 'WizardController@wizard2');

Route::post('wizard2/add', 'WizardController@addObjective');

Route::get('wizard3/{game_id}', 'WizardController@wizard3');

Route::post('wizard3/add', 'WizardController@addRules');

Route::get('wizard4/{game_id}', 'WizardController@wizard4');

Route::post('wizard4/add', 'WizardController@addSetting');

Route::get('profile', 'ProfileController@index');

Route::get('game-details/{game_id}', 'WizardController@getGame');

Route::get('plot', 'CommentController@getComments');

Route::post('plot/addcomment', 'CommentController@addComment');

Route::get('combat', 'WizardController@Plot');

Route::get('items', 'WizardController@Plot');

Route::get('npcs', 'WizardController@Plot');

Route::get('/login', function () {
	return view('/auth/Login');
});

Route::get('register', function () {
	return view('/auth/register');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
