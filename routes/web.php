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

Route::group(['prefix' => '/login'], function() {
    Route::get('/', 'AuthController@login');
    Route::post('/', 'AuthController@login');
});

Route::group(['middleware' => 'auth.camonapp'], function() {
    Route::get('/dashboard', 'DashboardController@index');

    Route::group(['prefix' => '/experiences'], function() {
        Route::get('/', 'ExperiencesController@index');
        Route::post('/', 'ExperiencesController@store');
        Route::get('/create', 'ExperiencesController@create');
    });
});

Route::get('/experiences/{experience}', 'ExperiencesController@show');