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


Route::get('/home', function(){

	if(Auth::user()->hasRole('Administrator'))
		return Redirect::to('/admin');
	elseif(Auth::user()->hasRole('Customer'))
		return Redirect::to('/customer');
	else return Redirect::to('/');

});

Route::get('/register', 'RegisterController@index');
Route::get('/register/application',['as' => 'register.application.index','uses' => 'RegisterController@index']);
Route::get('/register/application/{id}',['as' => 'register.application','uses' => 'RegisterController@show']);
Route::post('/register/login',['as' => 'register.login','uses' => 'RegisterController@login']);
Route::post('/register/signup',['as' => 'register.signup','uses' => 'RegisterController@signup']);
Route::post('/postRegister',['as' => 'register.register.postRegister','uses' => 'RegisterController@postRegister']);
Route::post('/getUserId/{id}',['as' => 'register.register.getUserId','uses' => 'RegisterController@getUserId']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Administrator'],
	'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'admin'], function ()
	{
		/*Administrator Management*/
		Route::get('/',['as' => 'admin.dashboard.index','uses' => 'Admin\IndexController@index']);
		Route::get('/applications',['as' => 'admin.applications.index','uses' => 'Admin\ApplicationsController@index']);
		Route::get('/search',['as' => 'admin.applications.search','uses' => 'Admin\ApplicationsController@search']);
		Route::get('/show/{id}',['as' => 'admin.applications.show','uses' => 'Admin\ApplicationsController@show']);
	});
});

Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Customer'],
	'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'customer'], function ()
	{
		/*Administrator Management*/

	});
});

