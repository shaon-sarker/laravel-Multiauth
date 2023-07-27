<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Xadmino - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
        <!-- Sweet Alert -->
        <link href="{{ asset('backend/assets/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap.min.css') }}    " rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap.min.css') }}    " rel="stylesheet" type="text/css"/>


        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}    " rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/icons.css') }}    " rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/style.css') }}    " rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('layouts.backend.topbar')
            <!-- Top Bar End -->
          


            <!-- ========== Left Sidebar Start ========== -->

            @include('layouts.backend.sidebar')
       
            <!-- Left Sidebar End -->



            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- content -->

                <footer class="footer">
                    2016 - 2020 © Xadmino.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('backend/assets/js/jquery.min.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/modernizr.min.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/detect.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/fastclick.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/jquery.blockUI.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/waves.js') }}     "></script>
        <script src="{{ asset('backend/ssets/js/wow.min.js') }}     a"></script>
        <script src="{{ asset('backend/assets/js/jquery.nicescroll.js') }}     "></script>
        <script src="{{ asset('backend/assets/js/jquery.scrollTo.min.js') }}     "></script>

        <script src="{{ asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}     "></script>

        <!-- Datatables-->
        <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}    "></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap.js') }}    "></script>
        <script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.js') }}    "></script>
        <script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap.min.js') }}   "></script>

        <script src="{{ asset('backend/assets/pages/dashborad.js') }}    "></script>

        <!-- Sweet-Alert  -->
        <script src="{{ asset('backend/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') }} "></script>
        <script src="{{ asset('backend/assets/pages/sweet-alert.init.js') }} "></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>