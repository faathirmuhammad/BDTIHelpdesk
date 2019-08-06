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
                            </div>
                        </div>
                        {!! $tiket->permasalahan !!}
                    </div>
                    <div class="col-md-4">
                        <div class="accordion" id="accordion_1">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between activestate">
                                    <a role="button" data-toggle="collapse" href="#collapse_1" aria-expanded="true">Detail</a>
                                </div>
                                <div id="collapse_1" class="collapse show" data-parent="#accordion_1" role="tabpanel">
                                    <div class="card-body pa-15">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Kategori Kasus</small>
                                                <span class="badge badge-dark">{{$tiket->daftar_kasuses->kasus}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Jenis Tiket</small>
                                                <span class="badge badge-dark">{{$tiket->jenis_tikets->jenis}}</span>
                                            </li>
                                            @if($tiket->nomor_nota_dinas != "")
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <small>Nota Dinas</small>
                                                    <span class="badge badge-dark">{{$tiket->nomor_nota_dinas}}</span>
                                                </li>
                                            @endif
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Petugas</small>
                                                <span class="badge badge-dark">{{$tiket->petugases->nama}}</span>
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
                                                <form action="{{route('cetak_tiket')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$tiket->id}}">
                                                    <button type="submit" class="btn btn-gradient-info font-weight-bold text-uppercase btn-sm btn-block">Cetak</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2" aria-expanded="false">Pelapor</a>
                                </div>
                                <div id="collapse_2" class="collapse" data-parent="#accordion_1">
                                    <div class="card-body pa-15">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Pelapor</small>
                                                <span class="badge badge-dark">{{$pelapor->nama}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Status</small>
                                                <span class="badge badge-dark">{{$tiket->jenispelapor}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Fraksi</small>
                                                <span class="badge badge-dark">{{$pelapor->fraksi}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Gedung</small>
                                                <span class="badge badge-dark">{{$pelapor->gedung}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Lantai</small>
                                                <span class="badge badge-dark">{{$pelapor->lantai}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Ruang</small>
                                                <span class="badge badge-dark">{{$pelapor->ruang}}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <small>Telp</small>
                                                <span class="badge badge-dark">{{$pelapor->telp}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection