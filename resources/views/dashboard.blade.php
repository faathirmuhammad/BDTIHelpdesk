@extends('template')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-sm">
                <div class="card-body">
                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Jumlah Tiket Bulan Ini </span>
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div>
                            <span class="d-block display-5 font-weight-400 text-dark">20 Tiket</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        

        

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="card card-refresh">
                    <div class="refresh-container">
                        <div class="loader-pendulums"></div>
                    </div>
                    <div class="card-header card-header-action">
                        <div>
                            <h6 class="mb-10">Jumlah Kasus per Kategori</h6>
                            
                        </div>
                        <div class="d-flex align-items-center card-action-wrap">
                            <a href="#" class="inline-block refresh mr-15">
                                <i class="ion ion-md-radio-button-off"></i>
                            </a>
                            <a href="#" class="inline-block full-screen">
                                <i class="ion ion-md-expand"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="hk-legend-wrap mb-20">
                            <div class="hk-legend">
                                <span class="d-10 bg-pink-light-3 rounded-circle d-inline-block"></span><span>Click Rate</span>
                            </div>
                            <div class="hk-legend">
                                <span class="d-10 bg-pink-light-4 rounded-circle d-inline-block"></span><span>Impressions</span>
                            </div>
                        </div>
                        <div id="e_chart_1" style="height: 194px;"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Kasus Pending</h5>
                
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Tiket</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jens</td>
                                        <td>Brincker</td>
                                        <td>Brincker123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Hay</td>
                                        <td>Hay123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>David</td>
                                        <td>Perry</td>
                                        <td>Perry123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Alan</td>
                                        <td>Gilchrist</td>
                                        <td>Gilchrist123</td>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xl-6">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Kasus OnHold</h5>
            
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Tiket</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jens</td>
                                        <td>Brincker</td>
                                        <td>Brincker123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Hay</td>
                                        <td>Hay123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>David</td>
                                        <td>Perry</td>
                                        <td>Perry123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Anthony</td>
                                        <td>Davie</td>
                                        <td>Davie123</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Alan</td>
                                        <td>Gilchrist</td>
                                        <td>Gilchrist123</td>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Daftar Kasus</h5>
                
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Tiket</th>
                                        <th>Nama Pelapor</th>
                                        <th>Jenis Pelapor</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>123456</td>
                                        <td>Brincker</td>
                                        <td>P</td>
                                        <td>OS</td>
                                        <td>Closed</td>
                                        <td>07/07/2019</td>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection