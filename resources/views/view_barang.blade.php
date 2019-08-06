@extends('template')
@section('title', 'View Barang')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Data Barang Masuk
                    <button class="btn btn-sm btn-gradient-secondary float-right font-weight-bold mb-30" data-toggle="modal"
                            data-target="#modal_tambah_persediaan">Tambah Persediaan</button>
                </h5>
                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30 font-sm-12">
                        <thead>
                        <tr>
                            <th class="font-sm-12">No</th>
                            <th class="font-sm-12">Nomor SPK</th>
                            <th class="font-sm-12">Tanggal SPK</th>
                            <th class="font-sm-12">Tanggal Masuk</th>
                            <th class="font-sm-12">Jumlah</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $x=1; @endphp
                        @foreach($persediaan as $p)
                        <tr>
                            <td>{{$x}}</td>
                            <td>{{$p->nomorspk}}</td>
                            <td>{{$p->tanggalspk}}</td>
                            <td>{{$p->tanggalbarangmasuk}}</td>
                            <td>{{$p->jumlah}}</td>
                            @php $x++; @endphp
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td>No</td>
                            <td>Nomor SPK</td>
                            <td>Tanggal SPK</td>
                            <td>Tanggal Masuk</td>
                            <td>Jumlah</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Data Barang Keluar</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1_copy" class="table table-hover w-100 display pb-30 font-sm-12">
                                <thead>
                                <tr>
                                    <th class="font-sm-12">No</th>
                                    <th class="font-sm-12">Nomor Tiket</th>
                                    <th class="font-sm-12">Tanggal Tiket</th>
                                    <th class="font-sm-12">Jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $x=1; @endphp
                                @foreach($keluar as $k)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$k->tikets->nomor}}</td>
                                        <td>{{$k->created_at->format('d/m/Y')}}</td>
                                        <td>{{$k->jumlah}}</td>
                                        @php $x++; @endphp
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>No</td>
                                    <td>Nomor Tiket</td>
                                    <td>Tanggal Tiket</td>
                                    <td>Jumlah</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="modal fade" id="modal_tambah_persediaan" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_persediaan"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="modal_tambah_persediaan">Tambah Persediaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('tambah_persediaan')}}" method="POST">
                    @csrf
                    <input type="hidden" name="barang_id" value="{{$id}}">
                    <div class="modal-body">
                        <label class="mt-5 mb-0 text-muted">Nomor SPK</label>
                        <input type="text" class="form-control" name="nomor_spk">
                        <label class="mt-5 mb-0 text-muted">Tanggal SPK</label>
                        <input class="form-control" type="date" name="tanggal_spk"/>
                        <label class="mt-5 mb-0 text-muted">Tanggal Barang Masuk</label>
                        <input class="form-control" type="date" name="tanggal_barang_masuk" />
                        <label class="mt-5 mb-0 text-muted">Jumlah</label>
                        <input type="number" class="form-control space_disable number_only" name="jumlah">
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