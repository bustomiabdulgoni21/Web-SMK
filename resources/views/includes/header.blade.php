<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{ asset('templates/frontend') }}/assets/img/Website.png" alt="">
        {{-- <h1>SMK ASH SHOHEH 1<span>.</span></h1> --}}
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/jurusan-tpm">Teknik Pemesinan (TPM)</a></li>
              <li><a href="/jurusan-tkr">Teknik Kendaraan Ringan (TKR)</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/team">Staff</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/image-tpm">Teknik Pemesinan (TPM)</a></li>
              <li><a href="/image-tkr">Teknik Kendaraan Ringan (TKR)</a></li>
            </ul>
          </li>
          <li><a href="/blog">News</a></li>
          <li><a href="/alumni">Alumni</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="{{ url('/admin') }}">Login</a>

    </div>
  </header><!-- End Header -->