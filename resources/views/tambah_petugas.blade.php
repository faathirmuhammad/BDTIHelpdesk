@extends('template')
@section('title', 'Tambah Petugas')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        Nama Petugas
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="nama_petugas" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nomor HP
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="nomor_petugas" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Spesialisasi
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" name="spesialisasi" >
                    </div>
                </div>


            </section>
        </div>
    </div>
@endsection