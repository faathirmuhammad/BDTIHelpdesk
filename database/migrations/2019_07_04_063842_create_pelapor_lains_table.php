<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelaporLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporlains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('fraksi')->nullable();
            $table->string('gedung')->nullable();
            $table->string('lantai')->nullable();
            $table->string('ruang')->nullable();
            $table->string('telp')->nullable();
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
        Schema::dropIfExists('pelaporlains');
    }
}
