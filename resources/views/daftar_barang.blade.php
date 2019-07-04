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
                                    <th>Satuan</th>
                                    <th>Tanggal SPK</th>
                                    <th>Nomor SPK</th>
                                    <th>Tanggal barang masuk</th>
                                    <th>Jumlah Barang Masuk</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Laptop</td>
                                    <td>Pcs</td>
                                    <td>02/01/2019</td>
                                    <td>1234</td>
                                    <td>10/03/2019</td>
                                    <td>2</td>
                                </tr><tr>
                                    <td>2</td>
                                    <td>Kabel</td>
                                    <td>Meter</td>
                                    <td>01/01/2019</td>
                                    <td>2345</td>
                                    <td>02/01/2019</td>
                                    <td>10</td>
                                </tr><tr>
                                    <td>3</td>
                                    <td>Monitor</td>
                                    <td>Pcs</td>
                                    <td>01/01/2019</td>
                                    <td>3456</td>
                                    <td>25/04/2011</td>
                                    <td>5</td>
                                </tr><tr>
                                    <td>4</td>
                                    <td>Gunting</td>
                                    <td>Pcs</td>
                                    <td>01/01/2019</td>
                                    <td>4567</td>
                                    <td>25/04/2011</td>
                                    <td>10</td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Tanggal SPK</th>
                                    <th>Nomor SPK</th>
                                    <th>Tanggal barang masuk</th>
                                    <th>Jumlah Barang Masuk</th>
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

