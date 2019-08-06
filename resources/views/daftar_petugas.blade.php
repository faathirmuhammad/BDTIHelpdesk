@extends('template')
@section('title', 'Daftar Petugas')
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
                                    <th>Nama Petugas</th>
                                    <th>Spesialisasi</th>
                                    <th>Phone</th>
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