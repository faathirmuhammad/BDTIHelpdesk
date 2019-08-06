<?php

namespace App\Http\Controllers;

use App\Siap;
use Illuminate\Http\Request;

class SiapController extends Controller
{
    public function daftar_pegawai()
    {
        $siap = Siap:: OrderBy('id', 'desc')->get();
        return view('daftar_pegawai', ['pegawai'=>$siap]);
    }
}
