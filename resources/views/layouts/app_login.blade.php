<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
@include('inc.head')
<!-- BODY -->
<body class="login">
  <!-- SIDEBAR -->
  @include('inc.sidebar')
  <!-- LOGO -->
  @include('inc.logo')
  <!-- CONTENT -->
  <div class="content">
    @yield('content')
  </div>
  <!-- FOOTER -->
  @include('inc.footer')
  <!-- JAVASCRIPTS -->
  @include('inc.script')
</body>
</html>