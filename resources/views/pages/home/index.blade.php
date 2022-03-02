@extends('layouts.app')

@section('title', 'Home')
    
@section('content')    

<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('templates/frontend') }}/assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome to SMK Ash Shoheh 1</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('templates/frontend') }}/assets/img/hero-carousel/hero-carousel-2.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Teknik Pemesinan (TPM)</h2>
            {{-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> --}}
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="{{ asset('templates/frontend') }}/assets/img/hero-carousel/hero-carousel-3.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Teknik Kendaraan Ringan (TKR)</h2>
            {{-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> --}}
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </section><!-- End Hero Section -->

</section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-2">
          <div class="col-xl-6 col-md-2 d-flex" data-aos="zoom-out" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Teknik Pemesinan (TPM)</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-6 col-md-2 d-flex" data-aos="zoom-out" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Teknik Kendaraan Ringan (TKR)</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{ asset('templates/frontend') }}/assets/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


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


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Nesciunt Mete</h3>
                </a>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Eosle Commodi</h3>
                </a>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Ledo Markt</h3>
                </a>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Asperiores Commodit</h3>
                </a>
                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Velit Doloremque</h3>
                </a>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('templates/frontend') }}/assets/img/services-6.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Dolori Architecto</h3>
                </a>
                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('templates/frontend') }}/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('templates/frontend') }}/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('templates/frontend') }}/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('templates/frontend') }}/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('templates/frontend') }}/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Pricing</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">

              <div class="pricing-header">
                <h3>Free Plan</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-item featured">

              <div class="pricing-header">
                <h3>Business Plan</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
                </li>
                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
                </li>
                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
            <div class="pricing-item">

              <div class="pricing-header">
                <h3>Developer Plan</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section> --}}
    <!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Teknik Pemesinan (TPM)</h2>
          {{-- <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta consequatur quaerat</p> --}}
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          {{-- <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters --> --}}

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <a href="{{ asset('templates/frontend') }}/assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
</section><!-- End Portfolio Section -->
    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Teknik Kendaraan Ringan (TKR)</h2>
          {{-- <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta consequatur quaerat</p> --}}
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          {{-- <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters --> --}}

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <a href="{{ asset('templates/frontend') }}/assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('templates/frontend')}}/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <a href="{{ asset('templates/frontend')}}/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
</section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Team</h2>
          {{-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> --}}
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('templates/frontend')}}/assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('templates/frontend')}}/assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('templates/frontend')}}/assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>News</h2>
          <p>Recent posts form our Blog</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('templates/frontend')}}/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('templates/frontend')}}/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('templates/frontend')}}/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

</section>
<!-- End Recent Blog Posts Section -->


@endsection
