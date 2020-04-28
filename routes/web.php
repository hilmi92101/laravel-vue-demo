<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {

    return view('welcome');

});


Route::prefix('tests')->group(function () {

	Route::get('/test-compiled-css-js', 'Tests\BasicController@cssjs');
	Route::get('/check-vue', 'Tests\BasicController@checkVue');

});

Route::prefix('demo')->group(function () {

	Route::get('/', 'LearningVue\BasicController@index');
	Route::get('/axios', 'LearningVue\BasicController@axios');
	
});

Route::post('/users/paginate', 'UserController@getPaginateUser');


