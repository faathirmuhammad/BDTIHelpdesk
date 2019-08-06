@extends('template')
@section('title', 'Daftar Barang')
@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end mb-25">
            <button type="button" class="btn btn-gradient-secondary font-weight-bold mr-5" data-toggle="modal"
                    data-target="#modal_tambah_barang">Tambah Barang
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Nama Barang</th>
                                    <th width="20%">Satuan</th>
                                    <th width="15%">Jumlah</th>
                                    <th width="10%">Aksi</th>
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
                                        <td>{{$jum}}</td>
                                        <td><a href="{{route('view_persediaan', $bar->id)}}" class="btn btn-outline-warning font-weight-bold tombol_tambah_persediaan">Edit</a></td>
                                    </tr>
                                    @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td width="10">No</td>
                                    <td>Nama Barang</td>
                                    <td>Satuan</td>
                                    <td>Jumlah</td>
                                    <td>Aksi</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="modal fade" id="modal_tambah_barang" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_barang"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="modal_tambah_barang">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('barang_new')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label class="mt-5 mb-0 text-muted">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang">
                        <label class="mt-5 mb-0 text-muted">Satuan</label>
                        <input type="text" class="form-control" name="satuan">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-gradient-primary font-weight-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection