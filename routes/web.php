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

Route::get('/dashboard', function(){return view('dashboard');});

Route::get('/view_tiket', function(){return view('view_tiket');});
Route::get('/tambah_tiket', function(){return view('tambah_tiket');});

Route::get('/tiket', function(){return redirect()->route('daftar_tiket');});

Route::get('/tiket/tambah_tiket', 'TiketController@tambah')->name('tiket_tambah');
Route::post('/tiket/tambah_tiket/new', 'TiketController@new')->name('tiket_new');

Route::get('/tiket/daftar_tiket', function(){return redirect()->route('daftar_tiket');});
Route::get('/tiket/daftar_tiket/list', 'TiketController@daftar_tiket')->name('daftar_tiket');
Route::get('/tiket/daftar_tiket/{id}', 'TiketController@view_tiket')->name('view_tiket');

//ajax
Route::post('/ajax/list_pelapor', 'TiketController@autocomplete')->name('ajax_list_pelapor');
Route::post('/ajax/list_nama', 'TiketController@autofilldata')->name('ajax_list_nama');
Route::post('/ajax/ganti_status', 'TiketController@gantistatus')->name('ajax_ganti_status');

