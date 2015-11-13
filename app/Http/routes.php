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
Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Auth', 'prefix' => 'auth','as' => 'auth'], function() {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
});
Route::resource('users','UsersController');
Route::resource('categories','CategoriesController');
Route::resource('words','WordsController');
Route::resource('results','ResultsController');
Route::resource('lessons','LessonsController');
Route::resource('profiles','ProfilesController');
Route::get('home', function () {
    return view('home');
});