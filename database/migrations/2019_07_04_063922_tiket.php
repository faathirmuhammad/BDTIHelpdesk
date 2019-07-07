<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tiket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor');
            $table->string('nomor_nota_dinas')->nullable();

            $table->string('jenispelapor');
            $table->unsignedBigInteger('pelapor');
            $table->foreign('pelapor')->references('id')->on('pelaporlains');

            $table->string('phone_pelapor');
            $table->string('email_pelapor');
            $table->longText('permasalahan');

            $table->unsignedBigInteger('kasus');
            $table->foreign('kasus')->references('id')->on('daftar_kasuses');

            $table->unsignedBigInteger('barang')->nullable();
            $table->foreign('barang')->references('id')->on('persediaan_barangs');
            $table->integer('jumlah')->nullable();

            $table->unsignedBigInteger('petugas');
            $table->foreign('petugas')->references('id')->on('petugas');

            $table->unsignedBigInteger('status');
            $table->foreign('status')->references('id')->on('status_kasuses');

            $table->unsignedBigInteger('jenis');
            $table->foreign('jenis')->references('id')->on('jenis_tikets');

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
        Schema::dropIfExists('tikets');
    }
}
