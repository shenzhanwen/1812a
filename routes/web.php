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

Route::prefix('/user')->group(function(){
    Route::any('user','UserController@user');
    Route::any('redis','UserController@redis');
    Route::any('adk','UserController@adk');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/lucky')->group(function(){
    Route::get('lucky','LuckyController@lucky');
    Route::get('btn','LuckyController@btn');
});
