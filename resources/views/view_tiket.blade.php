@extends('template')
@section('title', '#'.$tiket->nomor)
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-start">
                                @if($tiket->jenispelapor == "Pegawai")
                                    @php $pelapor = \App\Siap::find($tiket->pelapor) @endphp
                                @elseif($tiket->jenispelapor == "Anggota")
                                    @php $pelapor = \App\Sigota::find($tiket->pelapor) @endphp
                                @else
                                    @php $pelapor = \App\PelaporLain::find($tiket->pelapor) @endphp
                                @endif
                                <small class="text-uppercase font-weight-bold"><i class="ion ion-ios-information-circle-outline text-primary font-weight-bold "></i> {{$pelapor->nama}} / {{$pelapor->fraksi}} / {{$pelapor->gedung}} / Lantai {{$pelapor->lantai}} / Ruang {{$pelapor->ruang}} / {{$pelapor->telp  }}</small>
                            </div>
                        </div>
                        <hr>
                        {!! $tiket->permasalahan !!}
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <small>Kategori Kasus</small>
                                <span class="badge badge-dark">{{$tiket->daftar_kasuses->kasus}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <small>Jenis Tiket</small>
                                <span class="badge badge-dark">{{$tiket->jenis_tikets->jenis}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <small>Petugas</small>
                                <span class="badge badge-dark">{{$tiket->petugas->nama}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <small>Tanggal</small>
                                <span class="badge badge-dark">{{$tiket->created_at->format('d/m/Y')}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <small>Pelapor</small>
                                <span class="badge badge-dark">{{$tiket->jenispelapor}} / {{$pelapor->nama}}</span>
                            </li>
                            <li class="list-group-item">
                                <select id="view_tiket_status" class="form-control form-control-sm" data-value="{{$tiket->id}}">
                                    @foreach($status as $sta)
                                        <option value="{{$sta->id}}" @if($tiket->status == $sta->id) selected @endif >{{$sta->status}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="btn btn-gradient-info font-weight-bold text-uppercase btn-sm btn-block">Cetak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection