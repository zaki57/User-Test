<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    Route::group([mi'user', {
//
//    Route::get('/', 'UserController@index'),
//    Route::post('/', 'UserController@store'),
//    Route::post('/create', 'UserController@create'),
//    Route::get('/{id}', 'UserController@show'),
//    Route::put('/', 'UserController@update'),
//    Route::delete('/', 'UserController@destroy');
//    Route::patch('/', 'UserController@edit');
//
//});
//});
//
//Route::group(['middleware': 'auth:api'], 'user', function() {
//
//})



Route::group(['middleware' => 'auth:api'],
    function () {
        Route::get('user/', 'UserController@index');
        Route::post('user/', 'UserController@store');
        Route::post('user/create', 'UserController@create');
        Route::put('user/{id}', 'UserController@update');
        Route::delete('user/', 'UserController@destroy');
        Route::patch('user/edit', 'UserController@edit');


        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('user/{id}', 'UserController@show');

        });

    });
