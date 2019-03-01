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

Route::get('/', 'PoleController@index');

Route::resource('/poles', 'PoleController');

Auth::routes();


Route::post('pole/{id}/vote/{vote_id}', 'VoteController@vote');

Route::get('/home', 'HomeController@index')->name('home');
