<?php

namespace App\Http\Controllers;

use App\BarangKeluar;
use App\DaftarKasus;
use App\PelaporLain;
use App\Persediaan;
use App\PersediaanBarang;
use App\Petugas;
use App\Siap;
use App\Sigota;
use App\StatusKasus;
use App\Tiket;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\JenisTiket;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function tambah(){
        $jenistiket = JenisTiket::all();
        $kategori = DaftarKasus::all();
        $status = StatusKasus::all();
//        SELECT * FROM petugas a LEFT JOIN tikets b ON a.id = b.petugas WHERE b.petugas IS NULL OR b.status != 1

        $petugas = DB::table('petugas')->leftJoin('tikets', 'petugas.id', '=', 'tikets.petugas')->Where('tikets.petugas','=',NULL)->orWhere('tikets.status','!=','1')->get();

        $barang = PersediaanBarang::orderBy('nama_barang', 'asc')->get();
        return view('tambah_tiket', [
            'jenistiket'=>$jenistiket,
            'petugas'=>$petugas,
            'kategori'=>$kategori,
            'status'=>$status,
            'barang'=>$barang]);
    }

    public function autocomplete(Request $request){
        if($request->pelapor == "Pegawai"){
            $siaps = Siap::all('id', 'nama');
            return json_encode($siaps);
        }elseif ($request->pelapor == "Anggota"){
            $sigota = Sigota::all('id', 'nama');
            return json_encode($sigota);
        }
    }

    public function autofilldata(Request $request){
        if($request->pelapor == "Pegawai"){
            $siaps = Siap::find($request->id);
            return json_encode($siaps);
        }elseif ($request->pelapor == "Anggota"){
            $sigota = Sigota::find($request->id);
            return json_encode($sigota);
        }
    }

    public function new(Request $request){
//        dd($request);

        $tiket = new Tiket();
        $tiket->nomor = rand(1,1000).date("Y");
        $tiket->nomor_nota_dinas = $request->nomor_nota_dinas;
        $tiket->jenispelapor = $request->jenis_pelapor;

        if($request->jenis_pelapor == "Lain-lain"){
            $lain = new PelaporLain();
            $lain->nama = $request->pelapor_lain;
            $lain->fraksi = $request->unit_kerja;
            $lain->gedung = $request->gedung;
            $lain->lantai = $request->lantai;
            $lain->ruang = $request->ruangan;
            $lain->telp = $request->telepon_ruangan;
            $lain->save();
            $tiket->pelapor = $lain->id;
        }else{
            $tiket->pelapor = $request->pelapor;
        }

        $tiket->phone_pelapor = $request->phone_pelapor;
        $tiket->email_pelapor = $request->email_pelapor;
        $tiket->permasalahan = $request->permasalahan;
        $tiket->kasus = $request->kasus;
        $tiket->barang = $request->barang;
        $tiket->jumlah = $request->jumlah;

        $tiket->petugas = $request->petugas;
        $tiket->status = $request->status;
        $tiket->jenis = $request->jenis;
        $tiket->save();

        if($request->kasus == 1){
            $bar = new BarangKeluar();
            $bar->tiket_id = $tiket->id;
            $bar->barang_id = $request->barang;
            $bar->jumlah = $request->jumlah;
            $bar->save();
        }

        return redirect()->route('daftar_tiket');
    }

    public function daftar_tiket(){
        $tiket = Tiket::OrderBy('created_at', 'desc')->get();
        return view('daftar_tiket', ['tiket'=>$tiket]);
    }

    public function view_tiket($id){
        $tiket = Tiket::find($id);
        $status = StatusKasus::all();
        return view('view_tiket', ['tiket'=>$tiket, 'status'=>$status]);
    }

    public function gantistatus(Request $request){
        $tiket = Tiket::find($request->id);
        $tiket->status = $request->statusnya;
        $tiket->save();
        return json_encode("success");
    }

    public function cetak_tiket(Request $request){
        $tiket = Tiket::find($request->id);
        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont'=> 'Helvetica'])->loadView('cetak_tiket_1', ['tiket'=>$tiket])->stream();
    }

}
