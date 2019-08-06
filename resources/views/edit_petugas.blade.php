@extends('template')
@section('title', 'Edit Petugas')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('edit_petugas')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$petugas->id}}">
                    <div class="row">
                        <div class="col-xl-12">
                            Nama Petugas
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control" name="nama" value="{{$petugas->nama}}">
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-xl-12">
                            Nomor HP
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control" name="phone" value="{{$petugas->phone}}">
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-xl-12">
                            Spesialisasi
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control" name="spesialisasi" value="{{$petugas->spesialisasi}}" >
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-gradient-primary text-uppercase btn-block font-weight-bold">Submit</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
