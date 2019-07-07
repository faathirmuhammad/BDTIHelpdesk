<?php

namespace App\Http\Controllers;

use App\DaftarKasus;
use App\PelaporLain;
use App\PersediaanBarang;
use App\Petugas;
use App\Siap;
use App\Sigota;
use App\StatusKasus;
use App\Tiket;
use Illuminate\Http\Request;
use App\JenisTiket;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function tambah(){
        $jenistiket = JenisTiket::all();
        $petugas = Petugas::orderBy('nama', 'asc')->get();
        $kategori = DaftarKasus::all();
        $status = StatusKasus::all();
        $barang = PersediaanBarang::orderBy('id', 'desc')->where('jumlah_barang_masuk', '!=', '0')->get();
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

        if($request->kasus == 1){
            $query = DB::table('persediaan_barangs')->where('id', $request->barang)->decrement('jumlah_barang_masuk', $request->jumlah);
        }

        $tiket->petugases = $request->petugas;
        $tiket->status = $request->status;
        $tiket->jenis = $request->jenis;
        $tiket->save();

        return redirect()->route('daftar_tiket');
    }

    public function daftar_tiket(){
        $tiket = Tiket::all();
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

}
