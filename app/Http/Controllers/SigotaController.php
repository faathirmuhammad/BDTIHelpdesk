<?php

namespace App\Http\Controllers;

use App\Sigota;
use Illuminate\Http\Request;

class SigotaController extends Controller
{
    public function daftar_anggota()
    {
        $sigota = Sigota:: OrderBy('id', 'desc')->get();
        return view('daftar_anggota', ['anggota'=>$sigota]);
    }
}
