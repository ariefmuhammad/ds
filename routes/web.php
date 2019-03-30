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
    return view('buttton');
});

Route::get('tampildata', 'DataController@index')->name('tampildata');
Route::get('manggildata', 'DataController@get')->name('manggildata');

Route::post('tambahdata', 'DataController@tambahdata')->name('tambahdata');
Route::post('editdata/{data}/edit', 'DataController@editdata')->name('editdata');
Route::post('hapusdata/{data}', 'DataController@hapusdata')->name('hapusdata');


