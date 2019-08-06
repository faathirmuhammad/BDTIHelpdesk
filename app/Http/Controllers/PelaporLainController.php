<?php

namespace App\Http\Controllers;

use App\PelaporLain;
use Illuminate\Http\Request;

class PelaporLainController extends Controller
{
    public function daftar_pelaporlain()
    {
        $pelaporlain = PelaporLain:: OrderBy('id', 'desc')->get();
        return view('daftar_pelaporlain', ['pelaporlain'=>$pelaporlain]);
    }
}
