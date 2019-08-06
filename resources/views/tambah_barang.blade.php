@extends('template')
@section('title', 'Tambah Barang')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('barang_new')}}" method="POST">
                    @csrf
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
                            Tanggal SPK
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input class="form-control input-timepicker" type="date" name="tanggal_spk" />
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-8">
                            Jumlah Barang Masuk
                        </div>
                        <div class="col-md-4">
                            Satuan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control number_only space_disable" name="jumlah_barang_masuk" >
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control space_disable" name="satuan">
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-xl-12">
                            Tanggal Barang Masuk
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input class="form-control input-timepicker" type="date" name="tanggal_barang_masuk" />
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-3 offset-md-9">
                            <button type="submit" class="btn btn-gradient-info text-uppercase btn-block font-weight-bold">Submit</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection