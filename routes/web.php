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

Route::get('/test', function(){return view('cetak_tiket_1');});
Route::get('/tambah_tiket', function(){return view('tambah_tiket');});

Route::get('/tiket', function(){return redirect()->route('daftar_tiket');});

Route::get('/tiket/tambah_tiket', 'TiketController@tambah')->name('tiket_tambah');
Route::post('/tiket/tambah_tiket/new', 'TiketController@new')->name('tiket_new');

Route::get('/tiket/daftar_tiket', function(){return redirect()->route('daftar_tiket');});
Route::get('/tiket/daftar_tiket/list', 'TiketController@daftar_tiket')->name('daftar_tiket');
Route::get('/tiket/daftar_tiket/{id}', 'TiketController@view_tiket')->name('view_tiket');
Route::post('/tiket/daftar_tiket/cetak', 'TiketController@cetak_tiket')->name('cetak_tiket');

Route::get('/barang/tambah_barang', function(){return view('tambah_barang');})->name('tambah_barang');
Route::get('/barang/daftar_barang/list', 'PersediaanBarangController@daftar_barang')->name('daftar_barang');
Route::post('/barang/daftar_barang/new', 'PersediaanBarangController@new')->name('barang_new');

Route::get('/petugas/tambah_petugas', 'PetugasController@petugas')->name('tambah_petugas');
Route::get('/petugas/daftar_petugas/list', 'PetugasController@daftar_petugas')->name('daftar_petugas');
Route::post('/petugas/tambah_petugas/new', 'PetugasController@tambah_petugas')->name('petugas_new');

//ajax
Route::post('/ajax/list_pelapor', 'TiketController@autocomplete')->name('ajax_list_pelapor');
Route::post('/ajax/list_nama', 'TiketController@autofilldata')->name('ajax_list_nama');
Route::post('/ajax/ganti_status', 'TiketController@gantistatus')->name('ajax_ganti_status');

