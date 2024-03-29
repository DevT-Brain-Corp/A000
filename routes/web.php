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

Route::get('/', 'PageController@index')->name('home');
Route::get('/menu','PageController@menu')->name('menu');
Route::get('/reservation', 'PageController@reservation')->name('reservation');
Route::get('/galery', 'PageController@galery')->name('galery');
Route::post('/reservation/email', 'PageController@sendemail')->name('sendemail');
Route::get('/contact', 'PageController@contact')->name('contact');
