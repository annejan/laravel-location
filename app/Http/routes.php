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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('locations', 'Locations');

Route::bind('locations', function($value, $route) {
	return App\Location::whereId($value)->first();
});

Route::resource('locations', 'LocationController');

/**

GET /locations
GET /locations/:id
PUT /locations/:id
POST /locations

**/

Route::get('login', 'AuthController@login');