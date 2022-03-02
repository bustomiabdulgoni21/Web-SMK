<!DOCTYPE html>
<html lang="en">

<head>
  
    @include('includes.meta')

  <title>@yield('title') - SMK ASH SHOHEH 1</title>
    
    @include('includes.favicons')

    @include('includes.googlefonts')

    @include('includes.style')

</head>

<body>

  @include('includes.header')

    @yield('content')

  @include('includes.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('includes.script')

</body>

</html>