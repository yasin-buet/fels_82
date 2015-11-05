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
Route::get('home', function () {
    return view('home');
});
Route::get('word_list', function () {
    return view('word_list');
});
Route::get('category', function () {
    return view('category');
});
Route::get('lesson', function () {
    return view('lesson');
});
Route::get('result', function () {
    return view('result');
});
Route::get('profile', function () {
    return view('profile');
});



