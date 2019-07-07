<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSigotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sigotas', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama');
            $table->string('fraksi');
            $table->string('gedung');
            $table->string('lantai');
            $table->string('ruang');
            $table->string('telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sigotas');
    }
}
