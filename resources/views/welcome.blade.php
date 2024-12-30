<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Sumber Makmur Company</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              <nav>
                <div id="menu-toggle">
                  <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                  <div class="cross">
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <ul class="main-nav">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#testi">Testimoni</a></li>
                  <li><a href="#about">About</a></li>
                </ul>
              </nav>
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <div class="hero-text">
                <h1><span>Hello, We are</span><br>SUMMA.</h1>
                <h3>Portfolio absensi untuk pegawai kami</h3>
                <a href="admin/login" class="btn btn-lg btn-primary">Get Started</a>
                <ul class="social-links">
                  <li class="label">Join we here</li>
                  <li><a href="#"><img src="assets/behance.png"></a></li>
                  <li><a href="#"><img src="assets/dribbble.png"></a></li>
                  <li><a href="#"><img src="assets/twitter.png"></a></li>
                  <li><a href="#"><img src="assets/github.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section id="home" class="case-study">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Exclusively</h4>
              <h1 class="heading purple"><span class="purple">works</span> with <br>CEO and Co-CEO</h1>
              <!-- Swiper -->
              @if($portfolioData->isEmpty())
              <p>No Data available.</p>
              @else
              <div class="swiper-container client-swiper d-flex justify-content-center align-items-center">
                <div class="swiper-wrapper">
                    @foreach ($portfolioData as $data)
                    <div class="swiper-slide client-box text-center">
                        <img src="{{ asset('storage/'.$data->image) }}" class="client-logo img-thumbnail large">
                        <h3 class="text-left title">{{ $data->nama }}</h3>
                        <p class="text-left tag">{{ $data->goal }}</p>
                        <p class="text-left tag">Nim : <span>{{ $data->nim }}</span></p>
                        <p class="text-left tag">{{ $data->email }}</p>
                        <p class="text-left tag">{{ $data->telepon }}</p>
                        {{-- <p class="text-left"><a href="#">Know More &#8594;</a></p> --}}
                    </div>
                    @endforeach
                </div>
            </div>
            
            
                @endif
                
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>

      <section id="testi" class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Happy</h4>
              <h1 class="heading pink"><span class="pink">Client's</span> hello <br>testimonials</h1>
            </div>
          </div>  
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Swiper -->
              <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Ari sang Pencari</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Seniman Daffa</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Built with Bootstrap</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Yuan Sang Petualang</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Responsive template</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Sepuh Zidan</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Bintang Dilangit</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Anur sang Petarung</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- King Saidi</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rian sang Pecinta Wanita</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Statistics -->
      <section class="stats">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center stat-box">
              <h1 class="purple"><span class="counter">3.2</span>k</h1>
              <h3>Hours</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="blue counter">217</h1>
              <h3>Projects</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="pink"><span class="counter">18.3</span>k</h1>
              <h3>Cups of Coffee</h3>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Banner -->
      <section id="about" class="contact-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Tentang PT Sumber Makmur</h1>
                    <p>
                        PT Sumber Makmur adalah perusahaan yang berdedikasi untuk menyediakan solusi terbaik di bidang 
                        pembuatan website absensi. 
                        Dengan pengalaman bertahun-tahun, kami terus berkomitmen untuk memberikan inovasi, kualitas, dan 
                        layanan terbaik kepada mitra dan pelanggan kami. 
                    </p>
                    <p>
                        Kami percaya bahwa keberlanjutan dan efisiensi adalah kunci untuk membangun masa depan yang lebih baik. 
                        Oleh karena itu, kami selalu mengedepankan nilai-nilai seperti integritas, kolaborasi, dan inovasi 
                        dalam setiap langkah yang kami ambil.
                    </p>
                    <a href="/admin/login" class="btn btn-lg btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>
    

      <!-- Footer -->
      <footer>
        <div class="container-fluid">
          <div class="row footer">
            <div class="col-md-12 text-center">
              <h1>Sumber<br><span>Makmur</span></h1>
              <ul class="social-links">
                <li><a href="#"><img src="assets/behance.png"></a></li>
                <li><a href="#"><img src="assets/dribbble.png"></a></li>
                <li><a href="#"><img src="assets/twitter.png"></a></li>
                <li><a href="#"><img src="assets/github.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <!-- Some Javascript -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/swiper.jquery.min.js"></script>
      <!-- Initialize Client Swiper -->
      <script>
      var swiper1 = new Swiper('.client-swiper', {
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 60,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: '.swiper-pagination'
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });
      // Initialize Testimonial Swiper
      var swiper2 = new Swiper('.testimonial-swiper', {
        slidesPerView: 3,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      });
      </script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script>
      // Counterup
      $('.counter').counterUp({
        time: 1000
      });

      // Main Navigation
      $('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      })
      </script>

      <!-- Google Analytics - You should remove this -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');

      </script>
    </body>
    </html>