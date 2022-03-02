@extends('layouts.app')

@section('title','Contact')

@section('content')  

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container">

      <div class="section-header">
        <h2 class="mt-5">Contact</h2>
        {{-- <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p> --}}
      </div>

    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2575417240814!2d106.87958571414026!3d-6.489036865246971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0429709f723%3A0x69ddd1c42875828c!2sSMK%20Ash%20Shoheh%201!5e0!3m2!1sen!2sid!4v1645949542589!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div><!-- End Google Maps -->
    <div class="container">

      <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">

          <div class="info">
            <h3>Get in touch</h3>
            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Jln. Ash Shoheh No. 17, Citeureup Indonesia-16810</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>smkashshoheh01@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>021-8794-0980</p>
              </div>
            </div>
            <div class="info-item d-flex">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h4>Whatsapp:</h4>
                <p>0813-8812-7953</p>
              </div>
            </div>
            <!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-4">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

</section>
<!-- End Contact Section -->
@endsection
    