<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.includes.meta')
  <title>@yield('title') - SMK ASH SHOHEH 1 </title>
    @include('backend.includes.googlefonts')

    @stack('before-style')
    @include('backend.includes.style')
    @stack('after-style')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
    @include('backend.includes.navbar')

  @include('backend.includes.mainsidecontainer')

  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('backend.includes.mainfooter')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @stack('before-script')
@include('backend.includes.script')
  @stack('after-script')
</body>
</html>
