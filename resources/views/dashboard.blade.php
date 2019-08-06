@extends('template') @section('title', 'Dashboard') @section('content')
    <div class="row">
{{--        <div class="col-md-12">--}}
{{--            <div class="card card-sm">--}}
{{--                <div class="card-body">--}}
{{--                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Jumlah Tiket Bulan Ini </span>--}}
{{--                    <div class="d-flex align-items-center justify-content-between position-relative">--}}
{{--                        <div>--}}
{{--                            @php--}}
{{--                            $tiket = \App\Tiket::all();--}}
{{--                            $x = 0;--}}
{{--                            $currentdate = date('m');--}}
{{--                            foreach($tiket as $tik){--}}
{{--                                if($tik->created_at->format('m') == $currentdate){--}}
{{--                                    $x++;--}}
{{--                                }--}}
{{--                            }--}}
{{--                            @endphp--}}
{{--                            <span class="d-block display-5 font-weight-bold text-dark">{{$x}} Tiket</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title font-11 font-weight-500 text-dark text-uppercase">Jumlah Kasus Setiap Kategori</h5>
                <div class="card card-refresh">
                    <div class="card-body mt-10">
                        <div id="barchart" class="echart" style="height:294px;"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title font-11 font-weight-500 text-dark text-uppercase">Kasus Pending</h5>
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
                                    @php
                                    $tiket = \App\Tiket::Where('status','2')->OrderBy('created_at','asc')->get();
                                    $x=1;
                                    @endphp
                                    @foreach($tiket as $tik)
                                        <tr>
                                            <th scope="row">{{$x}}</th>
                                            <td><a href="{{route('view_tiket',$tik->id)}}">{{$tik->nomor}}</a></td>
                                            <td>{{$tik->daftar_kasuses->kasus}}</td>
                                            <td>{{$tik->created_at->format('d/m/Y')}}</td>
                                        </tr>
                                        @php $x++ @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-2 d-flex align-items-stretch align-items-center">
            <section class="hk-sec-wrapper bg-gradient-primary">
                <h5 class="hk-sec-title font-11 font-weight-500 text-dark text-uppercase text-center text-white">Jumlah Tiket Bulan Ini </h5>
                <div class="row h-100">
                    <div class="col-sm my-auto">
                        @php
                            $tiket = \App\Tiket::all();
                            $x = 0;
                            $currentdate = date('m');
                            foreach($tiket as $tik){
                                if($tik->created_at->format('m') == $currentdate){
                                    $x++;
                                }
                            }
                        @endphp
                        <h1 class="d-block font-weight-bold text-white text-center font-50">{{$x}}</h1>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-5 d-flex align-items-stretch">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title font-11 font-weight-500 text-dark text-uppercase">Kasus On Hold</h5>
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
                                    @php
                                        $tiket = \App\Tiket::Where('status','3')->OrderBy('created_at','asc')->get();
                                        $x=1;
                                    @endphp
                                    @foreach($tiket as $tik)
                                        <tr>
                                            <th scope="row">{{$x}}</th>
                                            <td><a href="{{route('view_tiket',$tik->id)}}">{{$tik->nomor}}</a></td>
                                            <td>{{$tik->daftar_kasuses->kasus}}</td>
                                            <td>{{$tik->created_at->format('d/m/Y')}}</td>
                                        </tr>
                                        @php $x++ @endphp
                                    @endforeach
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
                <h5 class="hk-sec-title font-11 font-weight-500 text-dark text-uppercase">Daftar Kasus</h5>
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
                                        <th class="text-center">Jenis Pelapor</th>
                                        <th class="text-center">Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $tiket = \App\Tiket::OrderBy('created_at', 'asc')->Where('status','!=',4)->limit(10)->get();
                                        $x=1;
                                    @endphp
                                    @foreach($tiket as $tik)
                                        @if($tik->jenispelapor == "Pegawai")
                                            @php $pelapor = \App\Siap::find($tik->pelapor) @endphp
                                        @elseif($tik->jenispelapor == "Anggota")
                                            @php $pelapor = \App\Sigota::find($tik->pelapor) @endphp
                                        @else
                                            @php $pelapor = \App\PelaporLain::find($tik->pelapor) @endphp
                                        @endif
                                        <tr>
                                            <th scope="row">{{$x}}</th>
                                            <td><a href="{{route('view_tiket',$tik->id)}}">{{$tik->nomor}}</a></td>
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @php
        $internet_dan_jaringan = \App\Tiket::where('kasus', 1)->count();
        $sistem_operasi = \App\Tiket::where('kasus', 2)->count();
        $hardware = \App\Tiket::where('kasus', 3)->count();
        $software = \App\Tiket::where('kasus', 4)->count();
        $aplikasi_internal = \App\Tiket::where('kasus', 5)->count();
        $pengembangan_jaringan = \App\Tiket::where('kasus', 6)->count();
        $Lain_lain = \App\Tiket::where('kasus', 7)->count();
        @endphp
        <script src="{{asset('template/vendors/echarts/dist/echarts-en.min.js')}}"></script>
        <script>
            var eChart_1 = echarts.init(document.getElementById('barchart'));
            var option = {
                color: ['#00acf0'],
                tooltip: {
                    show: true,
                    trigger: 'axis',
                    backgroundColor: '#fff',
                    borderRadius:6,
                    padding:6,
                    axisPointer:{
                        lineStyle:{
                            width:0,
                        }
                    },
                    textStyle: {
                        color: '#324148',
                        fontFamily: '"Roboto", sans-serif',
                        fontSize: 12
                    }
                },

                xAxis: [{
                    type: 'category',
                    data: ['Internet Dan Jaringan', 'Sistem Operasi', 'Hardware', 'Software', 'Aplikasi Internal', 'Pengembangan Jaringan', 'Lain-lain'],
                    // data: ['SWC', 'SWC', 'SWC', 'SWC', 'SWC', 'SWC', 'SWC'],
                    axisLine: {
                        show:false
                    },
                    axisTick: {
                        show:false
                    },
                    axisLabel: {
                        textStyle: {
                            color: '#5e7d8a',
                            fontSize: 11
                        },
                        interval :0
                    }
                }],
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show:false
                    },
                    axisTick: {
                        show:false
                    },
                    axisLabel: {
                        textStyle: {
                            color: '#5e7d8a'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: '#eaecec',
                        }
                    },
                    ticks: {
                        precision:0
                    }
                },
                grid: {
                    top: '3%',
                    left: '3%',
                    right: '3%',
                    bottom: '3%',
                    containLabel: true
                },
                series: [{
                    data: [{{$internet_dan_jaringan}}, {{$sistem_operasi}}, {{$hardware}}, {{$software}}, {{$aplikasi_internal}}, {{$pengembangan_jaringan}}, {{$Lain_lain}}],
                    type: 'bar',
                    barMaxWidth: 40,
                    itemStyle: {
                        normal: {
                            barBorderRadius: [6, 6, 0, 0] ,
                        }
                    },
                }]
            };
            eChart_1.setOption(option);
            eChart_1.resize();
        </script>
@endsection
