@extends('layouts.app')

@section('title','Jurusan TPM')
    
@section('content')

<section id="jurusan-tpm" class="jurusan-tpm">
  <div class="container">
  
    <div class="section-header">
      <h2 class="mt-5">Teknik Pemesinan (TPM)</h2>
      {{-- <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p> --}}
    </div>
  
  </div>
</section>
<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-out">

      <div class="row g-5">

        <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
          <h3>Kepala Kompetensi <br><em>Teknik Pemesinan (TPM)</em></h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          {{-- <a class="cta-btn align-self-start" href="#">Call To Action</a> --}}
        </div>

        <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
          <div class="img">
            <img src="{{ asset('templates/frontend') }}/assets/img/cta.jpg" alt="" class="img-fluid">
          </div>
        </div>

      </div>

    </div>
</section>
<!-- End Call To Action Section -->
<!-- ======= On Focus Section ======= -->
<section id="onfocus" class="onfocus">
  <div class="container-fluid p-0" data-aos="fade-up">

    <div class="row g-0">
      <div class="col-lg-6 video-play position-relative">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
      </div>
      <div class="col-lg-6">
        <div class="content d-flex flex-column justify-content-center h-100">
          <h3>Voluptatem dignissimos provident quasi corporis</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</section><!-- End On Focus Section -->
@endsection
