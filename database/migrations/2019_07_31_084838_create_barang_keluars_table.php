<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tiket_id');
            $table->foreign('tiket_id')->on('tikets')->references('id');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('barang_id')->on('persediaan_barangs')->references('id');
            $table->integer('jumlah');
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
        Schema::dropIfExists('barang_keluars');
    }
}
