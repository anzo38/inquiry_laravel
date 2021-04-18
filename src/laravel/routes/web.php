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
Route::match(['get', 'post'],'/auth/login', ['as' => 'login', 'uses' => 'ContactController@login']);
Route::match(['get', 'post'],'/contact/input', ['as' => 'input', 'uses' => 'ContactController@input']);

Route::post('/contact/confirm', ['as' => 'confirm', 'uses' => 'ContactController@confirm']);

Route::post('/contact/complete', ['as' => 'complete', 'uses' => 'ContactController@complete']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
