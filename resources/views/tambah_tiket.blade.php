@extends('template')
@section('title', 'Tambah Tiket')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        Jenis Tiket
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <select class="form-control custom-select">
                            <option selected></option>
                            <option value="1">Nota Dinas</option>
                            <option value="2">Telpon</option>
                            <option value="3">WA</option>
                            <option value="4">Datang Langsung</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nomor Nota Dinas
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Jenis Pelapor
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <select class="form-control custom-select">
                            <option selected></option>
                            <option value="1">Pegawai</option>
                            <option value="2">Anggota</option>
                            <option value="3">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nama
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                    Unit Kerja/Fraksi
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-6">
                        Gedung
                    </div>
                    <div class="col-xl-6">
                        Lantai
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-6">
                        Ruang
                    </div>
                    <div class="col-xl-6">
                        Telepon Ruangan
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-6">
                    HP Pelapor
                    </div>
                    <div class="col-xl-6">
                        Email Pelapor
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                    <div class="col-xl-6">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Permasalahan
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <textarea class="form-control " rows="3" placeholder="Textarea"></textarea>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Kategori Kasus
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <select class="form-control custom-select">
                            <option selected></option>
                            <option value="1">Internet dan Jaringan</option>
                            <option value="2">Sistem Operasi</option>
                            <option value="3">Hardware</option>
                            <option value="4">Software</option>
                            <option value="5">Aplikasi Internal</option>
                            <option value="6">Pengembangan Jaringan</option>
                            <option value="7">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nama Barang
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Jumlah
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Nama Petugas
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <select class="form-control custom-select">
                            <option selected></option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-xl-12">
                        Status Kasus
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <select class="form-control custom-select">
                            <option selected></option>
                            <option value="1">Open</option>
                            <option value="2">Pending</option>
                            <option value="3">On Hold</option>
                            <option value="4">Closed</option>
                        </select>
                    </div>
                </div>

















            </section>
        </div>
    </div>




@endsection