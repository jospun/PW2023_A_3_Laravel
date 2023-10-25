<!DOCTYPE html>
<html>
    <head>
      <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>FEST fes</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
        <!-- Bootstrap CSS (from CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons (from CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- AOS (from CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Lightbox (from CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/glightbox@1.2.3/dist/css/glightbox.min.css" rel="stylesheet">
        <!-- Swiper (from CDN) -->
        <link href="https://unpkg.com/swiper@6.8.5/dist/css/swiper.min.css" rel="stylesheet">
        <!-- Your Main CSS File -->
        <link href="{{ asset('images/style.css') }}" rel="stylesheet">

        <style>
            body {
                margin: 0;
            }
            .event-pic {
              position: fixed;
              top: 0;
              left: 0;
              padding: 0px 12px 20px 12px;
              margin-bottom: 50px;
              width: 100% !important;
              height: 93.25% !important;
              object-fit: cover;
              z-index: -2;
              overflow: hidden;
            }
            .event-pic::before {
              content: "";
              position: absolute;
              left: 0; right: 0;
              top: 0; bottom: 0;
              background: rgba(0,0,0,.5);
            }
            .bft{
              background-color: #fff; 
              color: #111;
              font-family: "Poppins", sans-serif;
              font-size: 14px;
              margin-top: 1em;
              width: 8em;
              font-weight: 700;
            }
            .bft:hover {
              background-color: #49D6A9;
              color: #111;
            }
            .bft-2{
              background-color: transparent; 
              color: #eeeeee;
              border: 2.5px solid #eeeeee;
              font-family: "Poppins", sans-serif;
              font-size: 14px;
              margin-top: 1em;
              width: 8em;
              font-weight: 700;
            }
            .bft-2:hover {
              background-color: #49D6A9;
              color: #111;
            }
            .container-btn{
              position: relative;
              width: 100%;
              height: 110%;
              display: flex;
              justify-content: end;
              align-items: end;
              flex-direction: column;
              text-align: center;
            }
            .container-btn .title {
              position: absolute;
              bottom: 0;
              left: 0;
              margin: 10px;
              text-shadow: 1px 1px 4px #eee;
            }
            .scrollable-x {
              overflow-x: auto;
              white-space: nowrap;
            }
            .scrollable-x::-webkit-scrollbar {
              width: 0.5em;
            }

            .scrollable-x::-webkit-scrollbar-thumb {
              background-color: #eeeeee;
            }
        </style>
    </head>

    <body>

      <!-- ======= Header DONE ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">
    
          <div id="logo">
            <a href="index.html"><img src=" "alt=""></a>
          </div>
           <!-- Off-Canvas Navbar -->
           <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#featured">Feautured Event</a></li>
              <li><a class="nav-link scrollto" href="#souvenir">Souvenir</a></li>
              <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#iu">IU - Golden Hour</a></li>
                  <li><a href="#cld">Coldplay - Music of the Sphere</a></li>
                  <li><a href="#tls">Tulus - Tur Manusia 2023</a></li>
                  <li><a href="#ipes">Informatics Festival 11</a></li>
                  <li><a href="{{ url('acara') }}">JKT-48</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;"/></i>
          </nav><!-- .navbar --> 
        </div>
      </header><!-- End Header -->
    
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
              <div class="col d-flex col-lg-12 col-sm-12">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="pic"><img src="{{ asset('images/shirt.png') }}" alt=""></div>
                    
                  </div>
                </div>
              </div>
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
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <script src="{{ asset('vendor/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

      <script src="{{ asset('images/main.js') }}"></script>
    
    </body>
</html>
