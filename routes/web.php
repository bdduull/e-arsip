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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/print/{slug}', 'PrintController@Cetak');

Route::resource('/acc', 'AccController');

// Route::get('/print/kas', 'PrintController@CetakKas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
