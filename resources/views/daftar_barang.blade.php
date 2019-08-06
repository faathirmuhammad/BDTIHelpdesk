@extends('template')
@section('title', 'Daftar Barang')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="myTable" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Tanggal SPK</th>
                                    <th>Nomor SPK</th>
                                    <th>Tanggal Barang Masuk</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($barang as $bar)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$bar->nama_barang}}</td>
                                        <td>{{$bar->jumlah_barang_masuk}}</td>
                                        <td>{{$bar->satuan}}</td>
                                        <td>{{$bar->tanggal_spk}}</td>
                                        <td>{{$bar->nomor_spk}}</td>
                                        <td>{{$bar->tanggal_barang_masuk}}</td>
                                    </tr>
                                    @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Tanggal SPK</th>
                                    <th>Nomor SPK</th>
                                    <th>Tanggal Barang Masuk</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
