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

/*Route::get('/', function () {
    return view('welcome');
});*/

//temporary login
Route::get('tmp','TmpController@tmp');

//user's routers group
Route::group(['middleware' => ['tmp']], function() {
    Route::get('/', 'SubjectController@index');
    Route::get('/{id}', 'SubjectController@show');
});