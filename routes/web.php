<?php

use Illuminate\Support\Facades\Route;

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

//home
Route::get('/', 'matchController@home')->name('home');

//show
Route::get('/show{id}', 'matchController@show')->name('show');

//create
Route::get('/create', 'matchController@create')->name('create');
//store
Route::post('/store', 'matchController@store')->name('store');

//edit
Route::get('/edit/{id}', 'matchController@edit')->name('edit');
//update
Route::post('update/{id}', 'matchController@update')->name('update');

//destroy
Route::get('destroy/{id}', 'matchController@destroy')->name('destroy');