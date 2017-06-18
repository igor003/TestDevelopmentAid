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

Route::get('/', 'JobController@index')->name('home');
Route::post('/get_jobs', 'JobController@get_jobs')->name('get_jobs');
//Route::get('/', 'JobController@get_location')->name('home');
//Route::get('/', function(){
//   return view('welcome');
//});


