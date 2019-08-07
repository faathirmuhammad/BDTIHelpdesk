<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function auto_petugas(Request $request)
    {
        $cari = $request->q;
        $data = DB::table('petugas')->select('id', 'nama')->where('nama', 'LIKE', '%'.$cari.'%')->get();
        return response()->json($data);
    }

    public function auto_pelapor(Request $request)
    {
        $cari = $request->q;
        if($request->jenis_pelapor == "Pegawai"){
            $data = DB::table('siaps')->select('id', 'nama')->where('nama', 'LIKE', '%'.$cari.'%')->get();
        }elseif ($request->jenis_pelapor == "Anggota"){
            $data = DB::table('sigotas')->select('id', 'nama')->where('nama', 'LIKE', '%'.$cari.'%')->get();
        }
        return response()->json($data);
    }
}
