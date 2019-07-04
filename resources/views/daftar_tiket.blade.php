@extends('template')
@section('title', 'Daftar Tiket')
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
                                    <th>Nomor Tiket</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#">12019</a></td>
                                    <td>Sistem Operasi</td>
                                    <td><span class="badge badge-success">OPEN</span></td>
                                    <td>25/04/2011</td>
                                </tr><tr>
                                    <td>2</td>
                                    <td><a href="#">22019</a></td>
                                    <td>Internet dan Jaringan</td>
                                    <td><span class="badge badge-danger">CLOSED</span></td>
                                    <td>25/04/2011</td>
                                </tr><tr>
                                    <td>3</td>
                                    <td><a href="#">32019</a></td>
                                    <td>Hardware</td>
                                    <td><span class="badge badge-secondary">ON HOLD</span></td>
                                    <td>25/04/2011</td>
                                </tr><tr>
                                    <td>4</td>
                                    <td><a href="#">42019</a></td>
                                    <td>Software</td>
                                    <td><span class="badge badge-warning">PENDING</span></td>
                                    <td>25/04/2011</td>
                                </tr>

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