<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$jenis}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/jquery.countdown.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/animsition.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/rsvp/form.css')}}">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('template_web/wedding_4/css/color.css')}}" type="text/css" id="colors">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="">
                                <h2>{{$data->namaWanita}}<span>&amp;</span>{{$data->namaPria}}</h2>
                            </a>
                        </div>
                        <!-- logo close -->


                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">



            <!-- section begin -->
            <section id="section-hero-1" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="spacer-double"></div>
                            <div class="col-md-4 col-md-offset-4">
                                <!-- <img src="images/misc/7.jpg" class="img-circle" alt=""> -->
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="spacer-double"></div>
                                    <div class="col-md-5 text-right text-center-sm relative">
                                        <h2 class="name">{{$data->namaWanita}}</h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name">{{$data->namaPria}}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-couple">
                <div class="container relative z-index">
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1 text-center">
                            <div class="padding40">
                                <h2>{{$data->namaLengkapWanita}}</h2>
                                <p>{{$data->ayahWanita}} - {{$data->ibuWanita}}</p>

                            </div>
                        </div>

                        <div class="col-md-5 text-center">
                            <div class="padding40">
                                <h2>{{$data->namaLengkapPria}}</h2>
                                <p>{{$data->ayahPria}} - {{$data->ibuPria}}</p>

                            </div>
                        </div>

                        <div class="col-md-2 col-md-offset-5 mt-40 hidden-sm text-center absolute">
                            <span class="circle wow zoomIn" data-wow-delay=".8s">
                                <i class="fa fa-heart"></i>
                            </span>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2" data-bgcolor="#f8578d">
                <div class="container">
                    <div class="row wow fadeInUp">
                        <div class="col-md-8 col-md-offset-2">
                            <blockquote class="very-big text-light wow fadeIn">
                                "{{$data->kataPengantar}}"
                                <span>From Us</span>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- <div class="container">
                    <div class="row wow fadeInUp">
                        <div class="col-md-12 text-center">
                            <h2 class="deco"><span class="id-color">Time Left Until Event</span></h2>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="spacer-double"></div>
                            <div id="defaultCountdown" class="wow fadeIn"></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- section close -->

            @if($data->acara == 'wedding')
            @if(count($data->gallery) > 0)
            <!-- section begin -->
            <section id="section-gallery" aria-label="section-gallery" class="no-top no-bottom">
                <div id="gallery-carousel-4" class="owl-slide">
                    @foreach($data->gallery as $gallery)
                    <!-- gallery carousel-item -->
                    <div class="carousel-item">
                        <figure class="picframe">
                            <a class="image-popup" href="{{asset('project/' . $gallery) }}">
                                <span class="overlay-v">
                                    <i></i>
                                </span>
                            </a>
                            <img src="{{asset('project/' . $gallery) }}" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <!-- close gallery carousel-item -->

                    @endforeach
                </div>
            </section>
            @endif
            @endif
            <!-- section close -->

            <!-- section begin -->
            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>You Are Invited</span></h2>
                            <h2 data-wow-delay=".2s">{{$data->dayOfWeek}}, {{$data->dayOfMonth}} {{$data->month}} {{$data->year}}</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-event">
                <div class="container">
                    @if($data->acara == 'wedding')
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('template_web/wedding_3/images/misc/3.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Ceremony</h3>
                            {{$data->tglAkadId}}
                            <br> {{$data->waktuAkad}} PM - end<br> {{$data->alamatAkad}}<br>

                        </div>
                    </div>

                    <div class="spacer-double"></div>
                    @if($data->alamatResepsi != '' )
                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Reception</h3>
                            {{$data->tglResepsiId}}<br>{{$data->waktuResepsi}} PM - end<br>{{$data->alamatResepsi}}<br>

                        </div>

                        <div class="col-md-6 col-md-offset-1">
                            <img src="{{ asset('template_web/wedding_3/images/misc/4.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInRight">
                        </div>
                    </div>
                    @endif
                    @elseif($data->acara == 'engagement')
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('template_web/wedding_3/images/misc/3.jpg')}}" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Engagement</h3>
                            {{$data->tglLamaranId}}
                            <br> {{$data->waktuLamaran}} PM - end<br> {{$data->alamatLamaran}}<br>

                        </div>
                    </div>

                    @endif
                </div>
            </section>
            <!-- section close -->



        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp">{{$data->namaWanita}}<span>&amp;</span>{{$data->namaPria}}</h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2019 - Lovus by Designesia
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('template_web/wedding_4/js/jquery.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/easing.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/wow.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/enquire.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.plugin.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/countdown-custom.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/animsition.min.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/js/designesia.js')}}"></script>
    <script src="{{ asset('template_web/wedding_4/rsvp/form.js')}}"></script>

    <audio loop="loop" autoplay="autoplay">
        <source src="{{asset('project/'.$data->bgmusik)}}" type="audio/mpeg">
    </audio>

</body>

</html>