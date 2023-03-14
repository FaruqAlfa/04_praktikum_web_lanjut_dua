<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  @include('layouts.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('layouts.nav')
@include('layouts.sidebar')

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('pageHome')
    @yield('contact')
    @yield('pengalaman')
    @yield('profileFahmi')
    
    
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.js')
</body>
</html>
