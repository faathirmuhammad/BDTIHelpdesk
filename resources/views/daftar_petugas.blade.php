@extends('template')
@section('title', 'Daftar Petugas')
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
                                    <th>Nama Petugas</th>
                                    <th>Nomor HP</th>
                                    <th>Spesialisasi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fathir</td>
                                    <td>081112345678</td>
                                    <td>IT</td>
                                </tr><tr>
                                    <td>2</td>
                                    <td>Naura</td>
                                    <td>081223456789</td>
                                    <td>Data</td>
                                </tr><tr>
                                    <td>3</td>
                                    <td>Sarah</td>
                                    <td>081334567890</td>
                                    <td>Jaringan</td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Nomor HP</th>
                                    <th>Spesialisasi</th>
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