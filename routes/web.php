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

Route::resource('movies', 'MovieController');

Route::get('/', 'MovieController@index');
Route::get('/movies/{id}', 'MovieController@show')->name('movie');
Route::get('/movies/{id}', 'MovieController@update')->name('update');
Route::get('/movies/{id}', 'MovieController@edit')->name('edit');
Route::get('/movies/{id}', 'MovieController@show')->name('movie');


