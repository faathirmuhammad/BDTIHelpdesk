<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    public function tikets(){
        return $this->belongsTo('App\Tiket', 'tiket_id', 'id');
    }
}
