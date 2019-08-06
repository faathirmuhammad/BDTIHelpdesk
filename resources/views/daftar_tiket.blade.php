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
                                    <th>Nama Pelapor</th>
                                    <th>Jenis Pelapor</th>
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
                                        @if($tik->jenispelapor == "Pegawai")
                                            @php $pelapor = \App\Siap::find($tik->pelapor) @endphp
                                        @elseif($tik->jenispelapor == "Anggota")
                                            @php $pelapor = \App\Sigota::find($tik->pelapor) @endphp
                                        @else
                                            @php $pelapor = \App\PelaporLain::find($tik->pelapor) @endphp
                                        @endif
                                        <td>{{$pelapor->nama}}</td>


                                        @if($tik->jenispelapor == "Anggota")
                                            <td class="text-center">A</td>
                                        @elseif($tik->jenispelapor == "Pegawai")
                                            <td class="text-center">P</td>
                                        @elseif($tik->jenispelapor == "Lain-lain")
                                            <td class="text-center">L</td>
                                        @endif

                                        @if($tik->daftar_kasuses->kasus == "Sistem Operasi")
                                            <td class="text-center">OS</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Internet dan Jaringan")
                                            <td class="text-center">Internet dan Jaringan</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Hardware")
                                            <td class="text-center">Hw</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Software")
                                            <td class="text-center">Sw</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Aplikasi Internal")
                                            <td class="text-center">App</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Pengembangan Jaringan")
                                            <td class="text-center">Pengembangan Jaringan</td>
                                        @elseif($tik->daftar_kasuses->kasus == "Lain-lain")
                                            <td class="text-center">dll</td>
                                        @endif


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
                                    <th>Nama Pelapor</th>
                                    <th>Jenis Pelapor</th>
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