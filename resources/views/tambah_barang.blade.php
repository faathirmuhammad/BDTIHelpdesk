@extends('template')
@section('title', 'Tambah Barang')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        Nama Barang
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="nama_barang" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Satuan
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="satuan" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Tanggal SPK
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input class="form-control input-timepicker" type="date" name="tanggal_spk" />
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nomor SPK
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="nomor_spk" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Tanggal Barang Masuk
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input class="form-control input-timepicker" type="date" name="tanggal_barangmasuk" />
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Jumlah Barang Masuk
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="jumlah_barangmasuk" >
                    </div>
                </div>




            </section>
        </div>
    </div>
@endsection