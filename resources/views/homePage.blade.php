@extends('navbar/navbarHome')
@section('content')

    
      <!-- ======= Hero Section DONE ======= --> 
      <section id="hero">
        <video autoplay muted loop id="myVideo">
          <source src="{{ asset('video/iu.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-container my-1" data-aos="zoom-in" data-aos-delay="100">
          
          <h1>IU - Concert</h1>
          <h2 class="mb-3">12 October 2023</h2>
          <a href="{{ url('login') }}" class="btn-get-started mb-5">Get Ticket</a>
        </div>
      </section><!-- End Hero -->
    
      <main id="main">
    
        <!-- ======= About Section DONE ======= -->
        <section id="about">
          <div class="container" data-aos="fade-up">
            <div class="row about-container">
    
              <div class="col-lg-6 content order-lg-1 order-2">
                <h2 class="title">Few Words About Us</h2>
                <p>
                  At CAJ Projet, we're not just an event organizer; we're your event dream-weavers! From concept to reality, we've got it all covered.
                  Close, comfortable, and full of ambiance, our place is ready to accommodate your event. Let's work out the details!
                </p>
    
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="fa fa-briefcase"><img src="{{ asset('images/email.svg') }}" style="width: 40px; height:40px;"/></i></div>
                  <h4 class="title"><a href="">Email Us</a></h4>
                  <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
    
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon"><i class="fa fa-card-checklist"><img src="{{ asset('images/collab.svg') }}" style="width: 50px; height:50px;"/></i></div>
                  <h4 class="title"><a href="">Develop With Us</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
    
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon"><i class="bi bi-binoculars"><img src="{{ asset('images/fest.svg') }}" style="width: 50px; height:50px;"/></i></div>
                  <h4 class="title"><a href="">Enjoy Your Event</a></h4>
                  <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
    
              </div>
    
              <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
            </div>
    
          </div>
        </section><!-- End About Section -->
    
        <!-- ======= Featured Section DONE ======= -->
        <section id="featured">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h3 class="section-title">Featured Events</h3>
              <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12" data-aos="zoom-in">
                <div class="box" id="iu">
                  <img class="event-pic" src="https://dx35vtwkllhj9.cloudfront.net/trafalgarreleasing/iu-concert-the-golden-hour/images/regions/intl/share.jpg" />
                  <div class="container-btn">
                    <a href="#" class="btn bft rounded-pill">Buy Ticket</a>
                    <a href="#" class="btn bft-2 rounded-pill">Learn More</a>
                  </div>
                </div>
              </div> 

              <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                <div class="box" id="tls">
                  <img class="event-pic" src="https://bbo.co.id/images/modules/bigbang/event/226/261222-tulus-bbo-slider-02.jpg" />
                  <div class="container-btn">
                    <a href="#" class="btn bft rounded-pill bold900">Buy Ticket</a>
                    <a href="#" class="btn bft-2 rounded-pill">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                <div class="box" id="cld">
                  <img class="event-pic" src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/indizone/2023/05/09/8JsaJyR/daftar-song-list-music-of-the-spheres-coldplay-wajib-hapal-biar-bisa-sing-along45.jpg" />
                  <div class="container-btn">
                    <a href="#" class="btn bft rounded-pill">Buy Ticket</a>
                    <a href="#" class="btn bft-2 rounded-pill">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                <div class="box" id="bp">
                  <img class="event-pic" src="https://4.bp.blogspot.com/-75JWKnQiH-4/WRES2kLgGlI/AAAAAAAABGE/YE4Nh0NBfM81g_7JHPikTXoLUNe3zemngCLcB/s1600/JKT48%2BFestival%2BGreatest%2BHits.jpg.jpg" />
                  <div class="container-btn">
                    <a href="{{ url('acara') }}" class="btn bft rounded-pill">Buy Ticket</a>
                    <a href="{{ url('acara') }}" class="btn bft-2 rounded-pill">Learn More</a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                <div class="box" id="ipes">
                  <div class="container-btn">
                    <img class="event-pic" src="https://i.ytimg.com/vi/CGKyOCd-__E/maxresdefault.jpg" />
                    <a href="#" class="btn bft rounded-pill">Buy Ticket</a>
                    <a href="#" class="btn bft-2 rounded-pill">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Featured Section -->
    
        <!-- ======= Call To Action Section DONE ======= -->
        <section id="call-to-action">
          <div class="container">
            <div class="row" data-aos="zoom-in">
              <div class="col-lg-9 text-center text-lg-start">
                <h3 class="cta-title">Take All Of The Benefits!</h3>
                <p class="cta-text"> Banyak acara yang sangat menarik menanti anda. Daftarkan diri dan nikmati segala fitur dan benefits yang ada</p>
              </div>
              <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="{{ url('login') }}">Register Now!</a>
              </div>
            </div>
    
          </div>
        </section><!-- End Call To Action Section -->
    
        <!-- ======= Souvenir Section ======= -->
        <section id="souvenir">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <span class="d-flex justify-content-center"><a href="{{ url('souvenir') }}" class="section-title">Souvenir</a></span>
              <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="scrollable-x">
              {{-- @forelse($souvenirs as $souvenir) --}}
              <div class="col d-flex col-lg-12 col-sm-12">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                  </div>
                </div>
              </div>
              {{-- @endforelse --}}
            </div>
          </div>
        </section><!-- End Team Section -->
    
        <!-- ======= Contact Section DONE ======= -->
        <section id="contact">
          <div class="container">
            <div class="section-header">
              <h3 class="section-title">Contact</h3>
              <p class="section-description">Is there a specific event that you have in mind for us to organize? We are interested in your suggestions and are ready to accommodate your preferences</p>
            </div>
          </div>
    
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7654008721586!2d110.3714601502418!3d-7.756305122435606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a595365e5c777%3A0x803864b3904075f0!2sDepot%20Klamud%20%22Omah%20Degan%22%20Jalan%20Tirta%20Amarta%20Sleman%20DIY!5e0!3m2!1sen!2sid!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

          <div class="container mt-5">
            <div class="row justify-content-center">
    
              <div class="col-lg-3 col-md-4">
    
                <div class="info">
                  <div>
                    <i class="bi bi-geo-alt"></i>
                    <p>Kost Rayzel Hiu<br>Sleman, DIY</p>
                  </div>
    
                  <div>
                    <i class="bi bi-envelope"></i>
                    <p>CAJProject@example.com</p>
                  </div>
    
                  <div>
                    <i class="bi bi-phone"></i>
                    <p>+1 5589 55488 55s</p>
                  </div>
                </div>
    
                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
    
              </div>
    
              <div class="col-lg-5 col-md-8">
                <div class="form">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
    
      </main>
    
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
    
          </div>
        </div>
      </footer>
  
@endsection