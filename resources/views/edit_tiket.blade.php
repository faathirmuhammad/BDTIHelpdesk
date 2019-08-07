@extends('template')
@section('title', 'Edit Tiket')
@section('content')
    <form action="{{route('update_tiket')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$tiket->id}}">
        <input type="hidden" name="nomor" value="{{$tiket->nomor}}">
        <div class="row">
            <div class="col-xl-8">
                <section class="hk-sec-wrapper">
                    <div class="form-row">
                        <div class="col-md-6">
                            <select class="form-control form-control-sm" name="jenis" id="tambah_jenis_tiket" required>
                                <option selected class="bg-dark-100 text-white" disabled>Jenis Tiket</option>
                                @foreach($jenistiket as $jt)
                                    <option value="{{$jt->id}}" @if($tiket->jenis == $jt->id) selected @endif >{{$jt->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control form-control-sm" name="kasus" id="tambah_kategori_kasus"
                                    required>
                                <option selected class="bg-dark-100 text-white" disabled>Kategori Kasus</option>
                                @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}" @if($tiket->kasus == $kat->id) selected @endif >{{$kat->kasus}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="col-md-6">
                            <select class="form-control form-control-sm  select2" name="petugas" required>
                                <option selected class="bg-dark-100 text-white" disabled>Petugas</option>
                                @foreach($petugas as $pt)
                                    <option value="{{$pt->id}}" @if($tiket->petugas == $pt->id) selected @endif >{{$pt->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="status" required>
                                <option class="bg-dark-100 text-white" disabled>Status</option>
                                @foreach($status as $sta)
                                    <option value="{{$sta->id}}" @if($tiket->status == $sta->id) selected @endif >{{$sta->status}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <div class="tinymce-wrap">
                        <textarea class="tinymce" name="permasalahan" maxlength="300">{{$tiket->permasalahan}}</textarea>
                        {{--                        <textarea class="tinymce" name="permasalahan" maxlength="300" style="resize: none;" onkeyup="new do_resize(this);" onKeyPress="return ( this.value.length < 300); onpaste="return ( this.value.length < 300);"></textarea>--}}
                    </div>
                </section>
            </div>
            <div class="col-xl-4">
                <section class="hk-sec-wrapper tambah_form_dinas" @if($tiket->jenis != "1") style="display: none;" @endif>
                    <div class="row">
                        <div class="col-xl-12">
                            <small>Nomor Nota Dinas</small>
                            <input type="text" class="form-control tambah_form_dinas" name="nomor_nota_dinas">
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper tambah_barang" @if($tiket->kasus != "1") style="display: none;" @endif>
                    <div class="row">
                        <div class="col-xl-12">
                            <small>Nama Barang</small>
                            <select name="barang" class="form-control tambah_barang">
                                <option selected class="bg-dark-100 text-white" disabled>Barang</option>
                                @foreach($barang as $bar)
                                    @php
                                        $barangkeluar = \Illuminate\Support\Facades\DB::table('barang_keluars')->where('barang_id', $bar->id)->sum('jumlah');

                                    //get jumlah barang masuk
                                    $barangmasuk = \Illuminate\Support\Facades\DB::table('persediaans')->where('barang_id', $bar->id)->sum('jumlah');

                                    $jum = $barangmasuk - $barangkeluar;
                                    @endphp
                                    <option value="{{$bar->id}}" data-value="{{$jum}}" @if($tiket->kasus == "1" && $tiket->barang == $bar->id) selected @endif>{{$bar->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12">
                            <small>Jumlah</small>
                            <div class="input-group">
                                <input type="number" class="form-control tambah_barang jumlah_barang number_only"
                                       min="0" name="jumlah"  @if($tiket->kasus == 1) value="{{$tiket->jumlah}}" @endif>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="jumlah_maksimum"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper tambah_kategori" style="display: none;">
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" class="form-control tambah_kategori" name="kategori_lain"
                                   placeholder="Kategori Lain">
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <small>Pelapor</small>
                            <select class="form-control custom-select" name="jenis_pelapor" id="tambah_pelapor">
                                <option selected class="bg-dark-100 text-white" disabled></option>
                                <option value="Pegawai" @if($tiket->jenispelapor == "Pegawai") selected @endif>Pegawai</option>
                                <option value="Anggota" @if($tiket->jenispelapor == "Anggota") selected @endif>Anggota</option>
                                <option value="Lain-lain" @if($tiket->jenispelapor == "Lain-lain") selected @endif>Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12">
                            <small>Phone</small>
                            <input type="text" class="form-control number_only" name="phone_pelapor" value="{{$tiket->phone_pelapor}}" required>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12">
                            <small>Email</small>
                            <input type="email" class="form-control space_disable" name="email_pelapor" value="{{$tiket->email_pelapor}}" required>
                        </div>
                    </div>
                    <hr>
                    @if($tiket->jenispelapor == "Pegawai")
                        @php $pelapor = \App\Siap::find($tiket->pelapor) @endphp
                    @elseif($tiket->jenispelapor == "Anggota")
                        @php $pelapor = \App\Sigota::find($tiket->pelapor) @endphp
                    @else
                        @php $pelapor = \App\PelaporLain::find($tiket->pelapor) @endphp
                    @endif
                    <div class="tambah_data_pelapor">
                        <div class="row">
                            <div class="col-xl-12" style="display: none !important;" id="tambah_nama_select">
                                <small>Nama</small>
                                <select name="pelapor" class="form-control select2 tambah_nama">
                                    <option selected class="bg-dark-100 text-white" disabled></option>
                                </select>
                            </div>
                            <div class="col-xl-12" id="tambah_nama_input">
                                <small>Nama</small>
                                <input type="text" class="form-control tambah_namanya" name="pelapor_lain" value="{{$pelapor->nama}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-xl-12">
                                <small>Unit Kerja/Fraksi</small>
                                <input type="text" class="form-control" name="unit_kerja" id="tambah_fraksi" value="{{$pelapor->fraksi}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 mt-5">
                                <small>Gedung</small>
                                <input type="text" class="form-control" name="gedung" id="tambah_gedung" value="{{$pelapor->gedung}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                            <div class="col-xl-4 mt-5">
                                <small>Lantai</small>
                                <input type="text" class="form-control number_only" name="lantai" id="tambah_lantai" value="{{$pelapor->lantai}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 mt-5">
                                <small>Telepon</small>
                                <input type="text" class="form-control number_only" name="telepon_ruangan"
                                       id="tambah_telepon" value="{{$pelapor->telp}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                            <div class="col-xl-4 mt-5">
                                <small>Ruangan</small>
                                <input type="text" class="form-control" name="ruangan" id="tambah_ruangan" value="{{$pelapor->ruang}}" @if($tiket->jenispelapor == "Pegawai" || $tiket->jenispelapor == "Anggota") readonly @endif>
                            </div>
                        </div>
                    </div>
                </section>
                <button type="submit" class="btn btn-gradient-info btn-block btn-lg font-weight-bold">SUBMIT</button>
            </div>
        </div>
    </form>
@endsection
