<?php

namespace App\Http\Controllers;

use App\PersediaanBarang;
use Illuminate\Http\Request;

class PersediaanBarangController extends Controller
{
    public function daftar_barang(){
        $barang = PersediaanBarang::orderBy('id', 'desc')->get();
        return view('daftar_barang', ['barang'=>$barang]);
    }

    public function new(Request $request){
        $barang = new PersediaanBarang();
        $barang->nama_barang = $request->nama_barang;
        $barang->satuan = $request->satuan;
        $barang->tanggal_spk = $request->tanggal_spk;
        $barang->nomor_spk = $request->nomor_spk;
        $barang->tanggal_barang_masuk = $request->tanggal_barang_masuk;
        $barang->jumlah_barang_masuk = $request->jumlah_barang_masuk;
        $barang->save();

        return redirect()->route('daftar_barang');
    }
}
