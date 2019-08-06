<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    public function tikets(){
        return $this->belongsTo('App\Tiket', 'barang_id', 'id');
    }
}
