<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = "petugas";

    public function tiket(){
        return $this->hasMany('App\Tiket');
    }
}
