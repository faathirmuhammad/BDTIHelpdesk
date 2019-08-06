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
    return view('dashboard');
});
Route::get('/logintest', function () {
    return view('login');
});

Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');

Route::get('/test', function(){return view('cetak_tiket_1');});
Route::get('/tambah_tiket', function(){return view('tambah_tiket');});

Route::get('/tiket', function(){return redirect()->route('daftar_tiket');});

Route::get('/tiket/tambah', 'TiketController@tambah')->name('tiket_tambah');
Route::post('/tiket/tambah_tiket/new', 'TiketController@new')->name('tiket_new');

Route::get('/tiket/daftar', 'TiketController@daftar_tiket')->name('daftar_tiket');
Route::get('/tiket/{id}', 'TiketController@view_tiket')->name('view_tiket');
Route::get('/tiket/{id}/edit', 'TiketController@edit_tiket')->name('edit_tiket');
Route::post('/tiket/update', 'TiketController@update')->name('update_tiket');
Route::post('/tiket/cetak', 'TiketController@cetak_tiket')->name('cetak_tiket');
Route::post('/tiket/solusi', 'TiketController@tambah_solusi')->name('tambah_solusi');
Route::post('/tiket/closed', 'TiketController@tiket_close')->name('tiket_close');

Route::get('/barang/tambah_barang', function(){return view('tambah_barang');})->name('tambah_barang');
Route::get('/barang/daftar', 'PersediaanBarangController@daftar_barang')->name('daftar_barang');
Route::post('/barang/daftar_barang/new', 'PersediaanBarangController@new')->name('barang_new');
Route::get('/barang/{id}', 'PersediaanBarangController@viewpersediaan')->name('view_persediaan');
Route::post('/barang/tambah_persediaan', 'PersediaanBarangController@tambahpersediaan')->name('tambah_persediaan');
Route::post('/barang/delete', 'PersediaanBarangController@delete')->name('barang_delete');

Route::get('/petugas/', 'PetugasController@daftar_petugas')->name('daftar_petugas');
Route::post('/petugas/new', 'PetugasController@tambah_petugas')->name('petugas_new');
Route::get('/petugas/{id}', 'PetugasController@edit_petugas')->name('petugas_edit');
Route::post('/petugas/edit', 'PetugasController@edit')->name('edit_petugas');
Route::post('/petugas/delete', 'PetugasController@delete')->name('petugas_delete');

Route::get('/siap', 'SiapController@daftar_pegawai')->name('daftar_pegawai');
Route::get('/sigota', 'SigotaController@daftar_anggota')->name('daftar_anggota');
Route::get('/pelaporlain', 'PelaporLainController@daftar_pelaporlain')->name('daftar_pelaporlain');

Route::get('/pengguna', function(){return view('daftar_pengguna');})->name('daftar_pengguna');
Route::post('/pegguna/new', 'UserController@new')->name('pengguna_new');
Route::get('/pengguna/{id}', 'UserController@edit')->name('pengguna_edit');
Route::post('/pengguna/edit', 'UserController@edit_post')->name('pengguna_edit_post');
Route::post('/pegguna/delete', 'UserController@delete')->name('pengguna_delete');

//ajax
Route::post('/ajax/list_pelapor', 'TiketController@autocomplete')->name('ajax_list_pelapor');
Route::post('/ajax/list_nama', 'TiketController@autofilldata')->name('ajax_list_nama');
Route::post('/ajax/ganti_status', 'TiketController@gantistatus')->name('ajax_ganti_status');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
