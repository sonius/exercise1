<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix' => 'api','middleware' => 'myapi'], function () {
    
    
    Route::get('cinemas', [ 'as' => 'listCinemas', 'uses' => 'ApiController@listCinemas']);
    Route::get('cinemas/{name}', [ 'as' => 'getCinema', 'uses' => 'ApiController@getCinema']);
    Route::get('movies/{name}', [ 'as' => 'getMovie', 'uses' => 'ApiController@getMovie']);
    
    

});