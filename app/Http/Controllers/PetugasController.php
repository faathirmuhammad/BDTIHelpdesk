<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function daftar_petugas()
    {
        $petugas = Petugas::OrderBy('id', 'desc')->get();
        return view('daftar_petugas', ['petugas'=>$petugas]);
    }

    public function tambah_petugas(Request $request)
    {
        $petugas = new Petugas();
        $petugas->nama = $request->nama;
        $petugas->spesialisasi = $request->spesialisasi;
        $petugas->phone = $request->phone;
        $petugas->save();

        return redirect()->route('daftar_petugas');
    }

    public function petugas(){
        return view('tambah_petugas');
    }
}
