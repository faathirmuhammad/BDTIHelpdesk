<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>BDTI</title>
    <meta name="description" content="Bidang Data dan Teknologi Informasi" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{asset('template/vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{asset('template/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="{{asset('template/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

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
                            <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
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
                                    <i class="ion ion-ios-keypad"></i>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                            <i class="ion ion-ios-mail"></i>
                            <span class="nav-link-text">Tiket</span>
                        </a>
                        <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard1.html">Tambah Tiket</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard2.html">Daftar Tiket</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drpd">
                            <i class="ion ion-ios-cube"></i>
                            <span class="nav-link-text">Persediaan</span>
                        </a>
                        <ul id="dash_drpd" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="dashboard1.html">Tambah Persediaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard2.html">Daftar Persediaan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drpe">
                            <i class="ion ion-ios-contacts"></i>
                            <span class="nav-link-text">Petugas</span>
                        </a>
                        <ul id="dash_drpe" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="dashboard1.html">Tambah Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard2.html">Daftar Petugas</a>
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
        <!-- Container -->
        <div class="container mt-xl-50 mt-sm-30 mt-15">
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="bar-chart"></i></span></span>@yield('title')</h4>
            </div>
            <!-- Row -->
            @yield('content')
            <!-- /Row -->
        </div>
        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <p>BDTI© 2019</p>
                    </div>
                </div>
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

<!-- Apex JavaScript -->
<script src="{{asset('template/vendors/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('template/dist/js/irregular-data-series.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('template/dist/js/init.js')}}"></script>
<script src="{{asset('template/dist/js/dashboard-data.js')}}"></script>

</body>

</html>