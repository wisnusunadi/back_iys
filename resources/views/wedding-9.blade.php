<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$jenis}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Our Love - Responsive Wedding Template" />
  <meta name="keywords" content="retina, responsive, wedding, rsvp, Our Love" />
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/normalize.css')}}">
  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('template_web/wedding_9/css/main.css')}}" type="text/css">

  <script src="{{ asset('template_web/wedding_9/js/jquery-1.12.4.min.js')}}">
  </script>
  <script src="{{ asset('template_web/wedding_9/js/modernizr.custom.js')}}"></script>
</head>

<body>
  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- /Loading animation -->

  <div id="main-container">

    <!-- Header -->
    <header id="header" class="header">
      <div class="container clearfix">
        <div class="logo-container">
          <div class="header-logo">{{$data->namaPria}} <span class=" main-color">&amp;</span> {{$data->namaWanita}}</div>

        </div>

        <div class="header-date mobile-hidden">
          <p>{{$data->dayOfWeek}}, {{$data->dayOfMonth}} <span class="main-color"> {{$data->month}} </span> {{$data->year}}</p>

        </div>
        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </header>
    <!-- /Header -->

    <!-- Site Navigation -->
    <nav class="main-nav mobile-menu-hide">
      <div class="container">
        <ul class="nav navbar-nav">
          <li>
            <a href="#home">Home</a>
          </li>
          <li>
            <a href="#wedding-day">Our Day</a>
          </li>
          <li>
            <a href="#events">Wedding Events</a>
          </li>
          <li>
            <a href="#gallery">Gallery</a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- /Site Navigation -->

    <div class="sections">
      <!-- Home Section -->
      <section id="home" class="home-section clearfix">
        <div id="hs-image-block" class="hs-image-block" style="background-image: url('{{ asset('project/' . $data->gambarCover) }}');background-attachment: fixed; background-position: 50% 0;" data-stellar-background-ratio="0.3">
          <div class="hs-mask"></div>
        </div>

        <div class="hs-main-content container">
          <div class="hs-section-title">
            <h1>We’re Getting Married</h1>
          </div>

          <div class="about-us clearfix">
            <div class="about-us-block first-block">
              <div class="top-block">
                <div class="name">
                  <h2>{{$data->namaPria}}</h2>
                  <p>{{$data->namaLengkapPria}}</p>


                </div>

                <div class="photo">
                  @if($data->fotoPria != '')
                  <img src="{{ asset('project/' . $data->fotoPria) }}" alt="">
                  @endif
                </div>
              </div>
              <div class="bottom-block">
                <p>{{$data->ayahPria}} - {{$data->ibuPria}}</p>
              </div>
            </div>

            <div class="heart">
              <img src="{{ asset('template_web/wedding_9/images/heart_img.png')}}" alt="">
            </div>

            <div class="about-us-block second-block">
              <div class="top-block">
                <div class="name">
                  <h2>{{$data->namaWanita}}</h2>
                  <p>{{$data->namaLengkapWanita}}</p>
                </div>

                <div class="photo">
                  @if($data->fotoWanita != '')
                  <img src="{{ asset('project/' . $data->fotoWanita) }}" alt="">
                  @endif

                </div>
              </div>
              <div class="bottom-block">
                <p>{{$data->ayahWanita}} - {{$data->ibuWanita}}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Home Section -->

      <!-- Our Day Section -->
      <section id="wedding-day" class="wedding-day section-boxed">
        <div class="container">
          <div class="section-title">
            <h2>{{$data->dayOfWeek}}, {{$data->dayOfMonth}} <span class="main-color"> {{$data->month}} </span> {{$data->year}}</h2>
          </div>
          <!-- Counter -->
          <div id="count" class="count"> <!-- You can edit HTML code of this block in the js/main.js -->

          </div>
          <!-- Counter -->

          <p class="description">{{$data->kataPengantar}}</p>
        </div>
      </section>
      <!-- /Our Day Section -->

      @if($data->acara == 'wedding')
      <!-- Wedding Events Section -->
      <section id="events" class="our-story section-boxed">
        <div class="container">
          <div class="section-title">
            <h2>Wedding Events</h2>
          </div>

          <div class="row">
            <!-- Ceremony Block -->
            <div class="col-md-6 event-block">
              <div class="event-photo scale-image-effect">
                <img src="{{ asset('template_web/wedding_9/images/wedding.webp')}}" alt="">

              </div>

              <div class="event-title">
                <h3>The Ceremony</h3>
              </div>

              <div class="event-info">
                <div class="event-date"><i class="fa fa-calendar"></i>{{$data->tglAkadId}}</div>
                <div class="event-time"><i class="fa fa-clock-o"></i>{{$data->waktuAkad}} - end</div>
                <div class="event-address"><i class="fa fa-map-marker"></i>{{$data->alamatAkad}}</div>

              </div>
            </div>
            <!-- /Ceremony Block -->
            @if($data->alamatResepsi != '' )
            <!-- Party Block -->
            <div class="col-md-6 event-block">
              <div class="event-photo scale-image-effect">
                <img src="{{ asset('template_web/wedding_9/images/celeb.webp')}}" alt="">
              </div>

              <div class="event-title">
                <h3>The Party</h3>
              </div>

              <div class="event-info">
                <div class="event-date"><i class="fa fa-calendar"></i> {{$data->tglResepsiId}}</div>
                <div class="event-time"><i class="fa fa-clock-o"></i> {{$data->waktuResepsi}} PM - end</div>
                <div class="event-address"><i class="fa fa-map-marker"></i> {{$data->alamatResepsi}}</div>

              </div>
            </div>
            @endif
            <!-- /Party Block -->
          </div>
        </div>
      </section>
      <!-- /Wedding Events Section -->
      @elseif($data->acara == 'engagement')
      <section id="events" class="our-story section-boxed">
        <div class="container">
          <div class="section-title">
            <h2>Engagement Events</h2>
          </div>

          <div class="row">
            <!-- Ceremony Block -->
            <div class="row justify-content-center">
              <div class="col-md-6 event-block text-center">
                <div class="event-photo scale-image-effect">
                  <img src="{{ asset('template_web/wedding_9/images/wedding.webp')}}" alt="">
                </div>

                <div class="event-title">
                  <h3>The Engagement</h3>
                </div>

                <div class="event-info">
                  <div class="event-date"><i class="fa fa-calendar"></i>{{$data->tglLamaranId}}</div>
                  <div class="event-time"><i class="fa fa-clock-o"></i>{{$data->waktuLamaran}} - end</div>
                  <div class="event-address"><i class="fa fa-map-marker"></i>{{$data->alamatLamaran}}</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      @endif
      <!-- Gallery Section -->
      @if($data->acara == 'wedding')
      @if(count($data->gallery) > 0)
      <section id="gallery" class="gallery section-boxed section-bg-color">
        <div class="container">
          <div class="section-title">
            <h2>Gallery</h2>
          </div>

          <!-- Gallery Items -->
          <div class="row gallery-grid">
            @foreach($data->gallery as $gallery)
            <div class="col-sm-6 col-md-4 gallery-item">
              <a href="{{asset('project/' . $gallery) }}" title="">
                <img src="{{asset('project/' . $gallery) }}" alt="">
                <div class=" mask">
                </div>
              </a>
            </div>
            @endforeach
          </div>
          <!-- /Gallery Items -->
        </div>
      </section>
      <!-- /Gallery Section -->
      @endif
      @endif
      <!-- Footer (Thank You block) -->
      <footer id="thanks" class="footer">
        <div id="footer-image-block" class="footer-image-block" style="background-image: url('{{ asset('template_web/wedding_9/images/cover.webp')}}'); background-attachment: fixed; background-position: 50%;" data-stellar-background-ratio="0.3">
          <div class="footer-mask"></div>
        </div>

        <div class="footer-title">
          <h2>Thank You!</h2>
        </div>
      </footer>
      <!-- /Footer (Thank You block) -->

    </div>

  </div>
  <!-- /Main Container -->

  <script src="{{ asset('template_web/wedding_9/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/validator.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/jquery.countdown.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/jquery.malihu.PageScroll2id.min.js')}}"></script>
  <script src="{{ asset('template_web/wedding_9/js/main.js')}}"></script>

  <script>
    $(document).ready(function() {
      var startDate = '{{$data->tglMulai}}';
      $('#count').countdown(startDate, function(event) {
        $(this).html(event.strftime('' +
          '<div class="count-block days">%D<span class="count-label">day%!d</span></div>' +
          '<div class="count-block hours">%H<span class="count-label">%!H:hour,hours;</span></div>' +
          '<div class="count-block minutes">%M<span class="count-label">%!M:minute,minutes;</span></div>' +
          '<div class="count-block seconds">%S<span class="count-label">%!S:second,seconds;</span></div>'
        ));
      });
    });
  </script>
  <audio autoplay>
    <source src="{{asset('project/'.$data->bgmusik)}}" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
</body>

</html>