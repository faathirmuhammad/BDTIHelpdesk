@extends('template')
@section('title', 'Daftar Pelapor Lain')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="myTable" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Pelapor Lain</th>
                                    <th>Fraksi</th>
                                    <th>Gedung</th>
                                    <th>Lantai</th>
                                    <th>Ruang</th>
                                    <th>Telepon</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($pelaporlain as $pet)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$pet->nama}}</td>
                                        <td>{{$pet->fraksi}}</td>
                                        <td>{{$pet->gedung}}</td>
                                        <td>{{$pet->lantai}}</td>
                                        <td>{{$pet->ruang}}</td>
                                        <td>{{$pet->telp}}</td>
                                    </tr>
                                    @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama Pelapor lain</th>
                                    <th>Fraksi</th>
                                    <th>Gedung</th>
                                    <th>Lantai</th>
                                    <th>Ruang</th>
                                    <th>Telepon</th>
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