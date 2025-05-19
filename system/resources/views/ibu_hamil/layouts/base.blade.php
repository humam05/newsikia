<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIKIA-KAB.KETAPANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public') }}/template/assets/images/favicon.ico">
    <!-- App css -->
    <link href="{{ url('public') }}/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ url('public') }}/template/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/template/assets/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->

        @include('ibu_hamil.layouts.navbar')
        <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
        @include('ibu_hamil.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- end container-fluid -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2025 &copy; Tugas Akhir <a href="">Alvia</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout, etc.
                </div>
                <div class="mb-2">
                    <img src="{{ url('public') }}/template/assets/images/plugins/light.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('public') }}/template/assets/images/plugins/dark.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="{{ url('public') }}/template/assets/css/bootstrap-dark.min.css"
                        data-appStyle="{{ url('public') }}/template/assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ url('public') }}/template/assets/images/plugins/rtl.png"
                        class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="{{ url('public') }}/template/assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i
                        class="mdi mdi-download mr-1"></i> Download Now</a>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
    </a>

    <!-- Vendor js -->
    <script src="{{ url('public') }}/template/assets/js/vendor.min.js"></script>

    <script src="{{ url('public') }}/template/assets/libs/morris-js/morris.min.js"></script>
    <script src="{{ url('public') }}/template/assets/libs/raphael/raphael.min.js"></script>

    <script src="{{ url('public') }}/template/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ url('public') }}/template/assets/js/app.min.js"></script>

    @yield('scripts')
</body>

</html>
