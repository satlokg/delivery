<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/toastr.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
  @yield('style')
  <style>
  .main-footer {
    background-color: #e31818;
    border-top: 1px solid #dee2e6;
    color: #fff;
    padding: 1rem;
}
a {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
  .table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
    background-color: darkslategray;
    color: aliceblue;
}
  .table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
    background-color: darkslategray;
    color: aliceblue;
}
  .navbar-light .navbar-nav .nav-link {
    color: #fff;
}
  .btn-secondary {
    color: #fff;
    background-color: #084377;
    border-color: #6c757d;
    box-shadow: none;
}
  [class*=sidebar-dark-] {
    background-color: #340879;
}

[class*=sidebar-dark] .btn-sidebar, [class*=sidebar-dark] .form-control-sidebar {
    background-color: #b80c0c;
    border: 1px solid #56606a;
    color: #fff;
}
.navbar-white {
    background-color: #db0707;
    color: #fff;
}
 .btn-sm {
    padding: 0.5rem 0.5rem;
    font-size: .875rem;
    line-height: 0.6;
    border-radius: 0.2rem;
    margin: 2px;
}
.modal-header {
    background-color: darkgoldenrod;
    color: #fff;
}
  </style>
</head>
<body class="hold-transition blue-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.partials.headnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('layouts.partials.sidenav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('heading_page')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">@yield('heading_page')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="#">Venus Global</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
<!-- Page specific script -->
<script src="{{asset('dist/js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('dist/js/toastr.min.js')}}">
</script>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script>

            @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch(type){
            case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{Session::get('message')}}");
            // var audio = new Audio('beeptest.mp3');
            // audio.play();
            break;
            case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{Session::get('message')}}");
            // var audio = new Audio('beeptest.mp3');
            // audio.play();

            break;
            case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{Session::get('message')}}");
            // var audio = new Audio('beeptest.mp3');
            // audio.play();

            break;
            case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{Session::get('message')}}");
            // var audio = new Audio('beeptest.mp3');
            // audio.play();

            break;
            }
            @endif
</script>
<script>
    // slider
    $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  });
  
</script>
    @yield('script')

</body>
</html>
