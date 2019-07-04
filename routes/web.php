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
Route::get('/daftar_tiket', function(){return view('daftar_tiket');});
Route::get('/view_tiket', function(){return view('view_tiket');});
Route::get('/tambah_tiket', function(){return view('tambah_tiket');});
Route::get('/tambah_barang', function(){return view('tambah_barang');});
Route::get('/tambah_petugas', function(){return view('tambah_petugas');});
Route::get('/daftar_barang', function(){return view('daftar_barang');});
Route::get('/daftar_petugas', function(){return view('daftar_petugas');});
