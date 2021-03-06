<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = "tikets";

    public function daftar_kasuses(){
        return $this->belongsTo('App\DaftarKasus', 'kasus', 'id');
    }

    public function status_kasuses(){
        return $this->belongsTo('App\StatusKasus', 'status', 'id');
    }

    public function jenis_tikets(){
        return $this->belongsTo('App\JenisTiket', 'jenis', 'id');
    }

    public function petugases(){
        return $this->belongsTo('App\Petugas', 'petugas', 'id');
    }

    public function solusi(){
        return $this->hasOne('App\Solusi');
    }
}
