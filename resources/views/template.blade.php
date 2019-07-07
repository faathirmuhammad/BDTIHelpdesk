<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>BDTI</title>
    <meta name="description" content="Bidang Data dan Teknologi Informasi" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('template/favicon.ico')}}">
    <link rel="icon" href="{{asset('template/favicon.ico')}}" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{asset('template/vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{asset('template/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="{{asset('template/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
<style>
    .background-keren{
        background-color: #f5f5f6;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='250' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/svg%3E");
    }
</style>

<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
        <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
        <a class="navbar-brand" href="dashboard1.html">
            BDTI
        </a>
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item dropdown dropdown-authentication">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-body">
                            <span>Faathir Muhammad<i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                </div>
            </li>
        </ul>
    </nav>
    <form role="search" class="navbar-search">
        <div class="position-relative">
            <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
            <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
        </div>
    </form>
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    <nav class="hk-nav hk-nav-light">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="documentation.html">
                                    <i class="ion ion-ios-keypad text-muted"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('tiket/*') ? ' active' : '' }}">

                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                            <i class="ion ion-ios-mail text-muted"></i>
                            <span class="nav-link-text">Tiket</span>
                        </a>
                        <ul id="dash_drp" class="nav flex-column collapse collapse-level-1  ">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item {{ request()->is('tiket/tambah_tiket') ? ' active' : '' }}">
                                        <a class="nav-link" href="{{route('tiket_tambah')}}">Tambah Tiket</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('tiket/daftar_tiket/*') ? ' active' : '' }}">
                                        <a class="nav-link" href="{{route('daftar_tiket')}}">Daftar Tiket</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drpd">
                            <i class="ion ion-ios-cube text-muted"></i>
                            <span class="nav-link-text">Persediaan</span>
                        </a>
                        <ul id="dash_drpd" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tambah Persediaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Daftar Persediaan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drpe">
                            <i class="ion ion-ios-contacts text-muted"></i>
                            <span class="nav-link-text">Petugas</span>
                        </a>
                        <ul id="dash_drpe" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Tambah Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Daftar Petugas</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>
                <hr class="nav-separator">
            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <div class="faq-search-wrap background-keren">
            <div class="container">
                <h1 class="display-5 text-muted mb-20 text-uppercase font-weight-bold">@yield('title')</h1>
            </div>
        </div>
        <!-- Container -->
        <div class="container mt-sm-30 mt-5">
            @yield('content')
            <!-- /Row -->
        </div>
        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer justify-content-end">
                <p>BDTI© 2019</p>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('template/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('template/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('template/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('template/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('template/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('template/dist/js/feather.min.js')}}"></script>

<!-- Toggles JavaScript -->
<script src="{{asset('template/vendors/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{asset('template/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{asset('template/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('template/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

<!-- Sparkline JavaScript -->
<script src="{{asset('template/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

<!-- Vector Maps JavaScript -->
<script src="{{asset('template/vendors/vectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('template/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('template/vendors/vectormap/jquery-jvectormap-de-merc.js')}}"></script>
<script src="{{asset('template/dist/js/vectormap-data.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{asset('template/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- Toastr JS -->
<script src="{{asset('template/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('template/dist/js/init.js')}}"></script>
{{--<script src="{{asset('template/dist/js/dashboard-data.js')}}"></script>--}}
<script src="{{asset('template/dist/js/bdti.js')}}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script src="{{asset('template/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('template/dist/js/tinymce-data.js')}}"></script>
<script src="{{asset('template/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('template/vendors/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('template/dist/js/select2-data.js')}}"></script>


<script>
    $("document").ready(function(){
        $('#myTable').DataTable( {
            scrollY: 300,
            paging: true
        } );
    })
</script>

</body>

</html>