@php
$info = \App\Helper\admin\siteInformation::siteInfo();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $info['site_name'] }} | Admin</title>
    <link rel="icon" href="{{ $info['fav_icon'] }}" type="image/gif" sizes="16x16">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('/') }}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('/') }}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/plugins/toastr/toastr.min.css">
    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light .navbar-nav li.nav-item a.btn {
            color: #fff;
        }
    </style>
    <style>
        #status_button {
            background-color: limegreen;
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
    </style>
    {{-- SweetAlert --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center" id="load_img">
            <img class="animation__shake" src="{{--{{ url('/') }}/loader/3.gif--}}{{ $info['fav_icon'] }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item " style="margin-left: 941px">
                    <a class="nav-link btn btn-primary " data-toggle="modal" data-target="#modal-default"><i
                            class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        @include('admin.layout.leftmenu')
        @yield('content')

        <footer class="main-footer">
            <strong>{{ $info['copy_right'] }}</strong>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Logout</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="{{ route('admin::admin_logout') }}" type="button" class="btn btn-success">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!--AJAX MODAL START-->
    <div class="modal fade" id="AjaxModel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AjaxModelTitle">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -11px">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                </div>
                <div id="AjaxModelContent">
                    <div class="modal-body text-center">
                        <img src="{{url('loader/1.gif')}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right btn-flat" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--DELETE MODAL START-->
    <div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Parmanently</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure about this ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="" class="btn btn-danger" id="confirm_del">Delete</a>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{ url('/') }}/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('/') }}/admin/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('/') }}/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ url('/') }}/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('/') }}/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('/') }}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ url('/') }}/admin/dist/js/custom_admin.js"></script>
    <!-- daterangepicker -->
    <script src="{{ url('/') }}/admin/plugins/moment/moment.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('/') }}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ url('/') }}/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            $('.summernote').summernote({
                height: "200px",
            })
        })
    </script>
    <!-- overlayScrollbars -->
    <script src="{{ url('/') }}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('/') }}/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('/') }}/admin/dist/js/pages/dashboard.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
     {{--<script>
        $(document).ready(function() {
            if(sessionStorage.getItem('#confirmDelete')!=='true')
            {
                $('#popup').modal('show');
                sessionStorage.setItem('#confirmDelete',true);
            }
        });
</script> --}}
    <!-- Toastr -->
    <script src="{{ url('/') }}/admin/plugins/toastr/toastr.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ url('/') }}/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    {{-- SweetAlert --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

    @stack('scripts')
</body>

</html>
