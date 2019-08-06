<?php

namespace App\Http\Controllers;

use App\BarangKeluar;
use App\Persediaan;
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
        $barang->nama_barang = strtoupper($request->nama_barang);
        $barang->satuan = strtoupper($request->satuan);
        $barang->save();

        return redirect()->route('daftar_barang');
    }

    public function viewpersediaan($id){
        $per = Persediaan::Where('barang_id',$id)->orderBy('created_at', 'desc')->get();
        $kel = BarangKeluar::Where('barang_id', $id)->get();
        return view('view_barang', ['id'=>$id, 'persediaan'=>$per, 'keluar'=>$kel]);
    }

    public function tambahpersediaan(Request $request)
    {
//        dd($request);
        $per = new Persediaan();
        $per->barang_id = $request->barang_id;
        $per->nomorspk = $request->nomor_spk;
        $per->tanggalspk = $request->tanggal_spk;
        $per->tanggalbarangmasuk = $request->tanggal_barang_masuk;
        $per->jumlah = $request->jumlah;
        $per->save();

        return redirect()->route('view_persediaan', $request->barang_id);
    }
}
