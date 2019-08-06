@extends('template')
@section('title', 'Daftar Tiket')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nomor Tiket</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($tiket as $tik)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td><a href="{{route('view_tiket',$tik->id)}}">{{$tik->nomor}}</a></td>
                                        <td>{{$tik->daftar_kasuses->kasus}}</td>
                                        <td>
                                            @if($tik->status == 1)
                                                <span class="badge badge-success text-uppercase">{{$tik->status_kasuses->status}}</span>
                                            @elseif($tik->status == 2)
                                                <span class="badge badge-warning text-uppercase">{{$tik->status_kasuses->status}}</span>
                                            @elseif($tik->status == 3)
                                                <span class="badge badge-secondary text-uppercase">{{$tik->status_kasuses->status}}</span>
                                            @elseif($tik->status == 4)
                                                <span class="badge badge-danger text-uppercase">{{$tik->status_kasuses->status}}</span>
                                            @endif
                                        </td>
                                        <td>{{$tik->created_at->format("d/m/Y")}}</td>
                                    </tr>
                                @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Tiket</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
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