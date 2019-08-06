@extends('template')
@section('title', 'Daftar Barang')
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
                                    <th width="5%">No</th>
                                    <th width="50%">Nama Barang</th>
                                    <th width="20%">Satuan</th>
                                    <th width="15%" class="text-center">Jumlah</th>
                                    <th width="10%" class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($barang as $bar)
                                    @php
                                    //get jumlah barang keluar
                                    $barangkeluar = \Illuminate\Support\Facades\DB::table('barang_keluars')->where('barang_id', $bar->id)->sum('jumlah');

                                    //get jumlah barang masuk
                                    $barangmasuk = \Illuminate\Support\Facades\DB::table('persediaans')->where('barang_id', $bar->id)->sum('jumlah');

                                    $jum = $barangmasuk - $barangkeluar;
                                    @endphp
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$bar->nama_barang}}</td>
                                        <td>{{$bar->satuan}}</td>
                                        <td class="text-center">{{$jum}}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('view_persediaan', $bar->id)}}" class="btn btn-gradient-primary btn-sm tombol_tambah_persediaan"><i class="fa fa-pencil"></i></a>
                                            <form action="{{route('barang_delete')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$bar->id}}">
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
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th class="text-center">Jumlah</th>
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
                <form action="{{route('barang_new')}}" method="POST">
                    @csrf
                    <label class="mt-5 mb-0 text-muted">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                    <label class="mt-5 mb-0 text-muted">Satuan</label>
                    <input type="text" class="form-control" name="satuan">
                    <button type="submit" class="btn btn-gradient-primary text-uppercase font-weight-bold mt-10 btn-block">Submit</button>
                </form>
            </section>
        </div>
    </div>
@endsection
