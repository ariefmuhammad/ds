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

// Route::get('/', function () {
//     return view('button');
// });
Route::get('/', 'MahasiswaController@index')->name('tampilData');
// Route::get('/', 'DataController@index')->name('tampilData');
Route::get('manggilData', 'MahasiswaController@get')->name('manggilData');
// Route::get('manggilData', 'DataController@get')->name('manggildata');

// Route::post('tambahData', 'DataController@tambahData')->name('tambahData');
// Route::post('editData/{data}/edit', 'DataController@editData')->name('editData');
// Route::post('hapusData/{data}', 'DataController@hapusData')->name('hapusData');

Route::resource('dataMahasiswa', 'MahasiswaController');


