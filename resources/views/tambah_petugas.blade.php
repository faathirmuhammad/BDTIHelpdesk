@extends('template')
@section('title', 'Tambah Petugas')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('petugas_new')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            Nama Petugas
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control" name="nama" >
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-xl-12">
                            Nomor HP
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control" name="phone" >
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