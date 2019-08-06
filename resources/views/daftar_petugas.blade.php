@extends('template')
@section('title', 'Daftar Petugas')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Petugas</th>
                                    <th>Spesialisasi</th>
                                    <th>Phone</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($petugas as $pet)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$pet->nama}}</td>
                                        <td>{{$pet->spesialisasi}}</td>
                                        <td>{{$pet->phone}}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('petugas_edit',$pet->id)}}" class="btn btn-gradient-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <form action="{{route('petugas_delete')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$pet->id}}">
                                                <button type="submit" class="ml-1 btn btn-gradient-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Petugas</th>
                                    <th>Spesialisasi</th>
                                    <th>Phone</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('petugas_new')}}" method="POST">
                    @csrf
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
                    <button type="submit" class="btn btn-gradient-primary text-uppercase font-weight-bold mt-10 btn-block">Submit</button>
                </form>
            </section>
        </div>
    </div>
@endsection
