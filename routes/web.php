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
Route::group(['middleware' => ['web']], function(){
	Route::resource('visitante', 'VisitanteController');
});

Route::group(['middleware' => ['web']], function(){

    Route::get('/', 'VisitanteController@create');

    Route::group(['prefix' => 'visitante'], function(){

	    //Routes visitante
	    Route::get('create', 'VisitanteController@create');
    });
});
