<!doctype html>
<html lang="en" class="h-100 w-100">

<head>
    <title>{{$jenis}}</title>

    <link rel="preload" href="{{ asset('template_web/wedding_1/css/style.min.css')}}" as="style">
    <link rel="preload" href="{{ asset('template_web/wedding_1/js/script.min.js')}}" as="script">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Required CSS files -->
    <link href="{{ asset('template_web/wedding_1/css/style.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template_web/wedding_1/css/custom.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template_web/wedding_1/img/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('template_web/wedding_1/img/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('template_web/wedding_1/img/favicon.ico')}}">
</head>

<body id="page-top" class="h-100 w-100">

    <!-- Preloader Start -->
    <div class="preloader bg-white h-100 position-fixed w-100">
        <svg width="100px" height="100px" viewBox="0 0 100 100" y="0px" x="0px" class="position-absolute start-50 top-50 translate-middle">
            <g>
                <path class="path-heart" d="M89.49,37.8c0,25.54-39.59,46.24-39.59,46.24S10.31,63.34,10.31,37.8c0-29.59,39.59-28.67,39.59,0C49.9,10.06,89.49,8.21,89.49,37.8 z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="3.5" stroke="#000000" fill="#e8ede6"></path>
                <path class="path-heart-sm" d="M89.63,70.9c-3.57,10.15-22.21,12.84-22.21,12.84s-12.84-13.77-9.26-23.92c4.14-11.76,19.75-5.86,15.74,5.54 C77.78,54.33,93.78,59.13,89.63,70.9z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="3.5" stroke="#000000" fill="#6d8a91"></path>
            </g>
        </svg>
    </div>
    <!-- Preloader End -->


    <!-- Header Start -->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <!-- Navbar brand (mobile) -->
                <div class="navbar-brand align-items-center d-flex d-lg-none me-0">
                    <img width="300" height="67" src="{{ asset('template_web/wedding_1/img/navbar-brand.png')}}" alt="Logo">
                </div>

                <!-- Navbar toggler -->
                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar menu -->
                <div id="navbar" class="collapse navbar-collapse justify-content-lg-center">
                    <ul class="navbar-nav pt-3 pt-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link page-scroll" href="#the-couple">The Couple</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link page-scroll" href="#the-wedding-event">Events</a>
                        </li>

                    </ul>

                    <!-- Navbar brand (desktop) -->
                    <div class="navbar-brand d-none d-lg-block mx-3 mx-xl-5 text-center">
                        <img width="300" height="67" src="{{ asset('template_web/wedding_1/img/navbar-brand.png')}}" alt="Logo">
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#messages">Messages</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link page-scroll" href="#photos">Photos</a>
                        </li>
                    </ul>
                </div>
                <!-- //.collapse -->
            </div>
            <!-- //.container -->
        </nav>
    </header>
    <!-- Header End -->


    <!-- Spacer -->
    <span class="spacer d-block w-100"></span>


    <!-- Section - Hero Start -->
    <section id="hero" class="bg-img-cover bg-overlay position-relative" style="background-image: url('{{ asset('project/' . $data->gambarCover) }}')">
        <div class="container">
            <div class="row g-0 justify-content-center justify-content-lg-start">
                <div class="col-md-9 col-lg-6 col-xl-5 bg-white px-4 py-5 position-relative rounded shadow">
                    <h5 class="font-alt fw-bold lh-1 mb-3 text-center">Together with Their Families</h5>
                    <span class="section-divider divider-secondary"></span>

                    <div class="img-clip-path clip-hero position-relative">
                        <img src="{{ asset('project/' . $data->gambarUtama) }}" alt="" class="img-fluid">
                    </div>
                    <!-- //.img-clip-path -->

                    <div class="align-items-center d-flex justify-content-center mb-2">
                        <h2 class="font-alt fw-bold m-0">{{$data->namaPria}}</h2>
                        <span class="icon-svg icon-svg-lg mx-2"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-ampersand.svg')}}" alt=""></span>
                        <h2 class="font-alt fw-bold m-0">{{$data->namaWanita}}</h2>
                    </div>
                    <!-- //.align-items-center -->

                    <p class="fs-5 text-center text-muted">Request the honor of your presence at their wedding ceremony and reception.</p>

                    <!-- Ornament -->
                    <img width="100" src="{{ asset('template_web/wedding_1/img/ornament-divider.png')}}" alt="" class="d-block mx-auto">
                    <span class="ornament-corner ornament-primary ornament-top"></span>
                    <span class="ornament-corner ornament-primary"></span>
                </div>
                <!-- //.col-md-9 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- Section - Hero End -->


    <!-- Section - The Couple Start -->
    <section id="the-couple">
        <div class="container">
            <div class="row mb-5 pb-lg-5">
                <div class="col-12 text-center">
                    <h2 class="font-alt fs-3 fw-bold text-uppercase">The Happy Couple</h2>
                    <p class="font-alt fs-5 fst-italic text-muted">A happy marriage is the union of two good forgivers.</p>
                    <span class="section-divider divider-primary"></span>
                </div>
                <!-- //.col-12 -->
            </div>
            <!-- //.row -->

            <div class="row justify-content-center">

                <!-- The Groom -->
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            @if($data->fotoWanita != '')
                            <div class="bg-white border mb-3 mb-md-0 p-2 position-relative">
                                <img class="img-fluid" src="{{ asset('project/' . $data->fotoWanita) }}" alt="">
                                <span class="bg-secondary bottom-0 end-0 font-alt fst-italic m-3 position-absolute px-3 py-2 rounded text-white">The Bride</span>
                            </div>
                            @endif



                            <!-- //.bg-white -->
                        </div>
                        <!-- //.col-md-6 -->

                        <div class="col-md-6 text-center text-md-start">
                            <h5 class="font-alt fw-bold text-uppercase">{{$data->namaLengkapWanita}}</h5>
                            <p class="font-alt fst-italic text-muted">{{$data->ayahWanita}} & {{$data->ibuWanita}}</p>
                            <hr class="border-secondary mx-auto mx-md-0 sep-line">
                        </div>
                        <!-- //.col-md-6 -->
                    </div>
                    <!-- //.row -->
                </div>

                <!-- The Bride -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            @if($data->fotoPria != '')
                            <div class="bg-white border mb-3 mb-md-0 p-2 position-relative">
                                <img class="img-fluid" src="{{ asset('project/' . $data->fotoPria) }}" alt="">
                                <span class="bg-secondary bottom-0 end-0 font-alt fst-italic m-3 position-absolute px-3 py-2 rounded text-white">The Groom</span>
                            </div>
                            @endif
                            <!-- //.bg-white -->
                        </div>
                        <!-- //.col-md-6 -->

                        <div class="col-md-6 text-center text-md-start">
                            <h5 class="font-alt fw-bold text-uppercase">{{$data->namaLengkapPria}}</h5>
                            <p class="font-alt fst-italic text-muted">{{$data->ayahPria}} & {{$data->ibuPria}}</p>
                            <hr class="border-secondary mx-auto mx-md-0 sep-line">
                        </div>
                        <!-- //.col-md-6 -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //.col-lg-6 -->



                <!-- //.col-lg-6 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- Section - The Couple End -->


    <!-- Section - The Wedding Event Start -->
    <section id="the-wedding-event" class="bg-img-cover bg-overlay position-relative">
        <div class="container position-relative">
            <div class="row mb-5 pb-lg-5">
                <div class="col-12 text-center">
                    <h2 class="font-alt fs-3 fw-bold text-uppercase text-light">The Wedding Event</h2>
                    <p class="font-alt fs-5 fst-italic text-light">If you have only one smile in you give it to the people you love.</p>
                    <span class="section-divider divider-secondary"></span>
                </div>
                <!-- //.col-12 -->
            </div>
            <!-- //.row -->
            @if($data->acara == 'wedding')
            @if($data->alamatAkad != '')
            <div class="row gx-lg-5 justify-content-center">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-5 mb-lg-0">
                    <div class="bg-white h-100 p-5 rounded shadow">
                        <h3 class="font-alt fs-4 fw-bold text-uppercase">The Ceremony</h3>
                        <hr class="border-secondary sep-line">

                        <div class="align-items-center d-flex mb-3">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-calendar.svg')}}" alt=""></span>
                            <span>
                                {{$data->tglAkadId}} <br>
                                {{$data->waktuAkad}}pm - until end
                            </span>
                        </div>
                        <!-- //.align-items-center -->

                        <div class="align-items-center d-flex mb-4">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-arch.svg')}}" alt=""></span>
                            <span>{{ $data->alamatAkad }}
                            </span>
                        </div>
                        <!-- //.align-items-center -->

                        <div class="d-flex">
                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#how-to-get-there-modal" class="btn fs-9 ls-1 me-3">How To Get There</button> -->
                            <!-- <a href="https://goo.gl/maps/forfEYxSuKmr3w6e8?coh=178572&entry=tt" class="page-scroll btn border-0 fs-9 ls-1 text-decoration-underline" target="_blank">View Map</a> -->
                        </div>
                        <!-- //.d-flex -->
                    </div>
                    <!-- //.bg-white -->
                </div>
                @endif
                <!-- //.col-md-9 -->

                @if($data->alamatResepsi != '' )
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <div class="bg-white h-100 p-5 rounded shadow">
                        <h3 class="font-alt fs-4 fw-bold text-uppercase">The Reception</h3>
                        <hr class="border-secondary sep-line">

                        <div class="align-items-center d-flex mb-3">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-calendar.svg')}}" alt=""></span>
                            <span>
                                {{$data->tglResepsiId}} <br>
                                {{$data->waktuResepsi}}pm - until end
                        </div>
                        <!-- //.align-items-center -->

                        <div class="align-items-center d-flex mb-4">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-cake.svg')}}" alt=""></span>
                            <span>{{$data->alamatResepsi}}
                            </span>
                            </span>
                        </div>
                        <!-- //.align-items-center -->

                        <div class="d-flex">
                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#how-to-get-there-modal" class="btn fs-9 ls-1 me-3">How To Get There</button> -->
                            <!-- <a href="https://goo.gl/maps/Pzrjm2K3JorMkLVK9?coh=178572&entry=tt" class="page-scroll btn border-0 fs-9 ls-1 text-decoration-underline" target="_blank">View Map</a> -->
                        </div>
                        <!-- //.d-flex -->
                    </div>
                    <!-- //.bg-white -->
                </div>
                @endif
                @elseif($data->acara == 'engagement')
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <div class="bg-white h-100 p-5 rounded shadow">
                        <h3 class="font-alt fs-4 fw-bold text-uppercase">The Engagement</h3>
                        <hr class="border-secondary sep-line">

                        <div class="align-items-center d-flex mb-3">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-calendar.svg')}}" alt=""></span>
                            <span>
                                {{$data->tglLamaranId}} <br>
                                {{$data->waktuLamaran}}pm - until end
                        </div>
                        <!-- //.align-items-center -->

                        <div class="align-items-center d-flex mb-4">
                            <span class="icon-svg me-4"><img src="{{ asset('template_web/wedding_1/img/icon-wedding-cake.svg')}}" alt=""></span>
                            <span>{{$data->alamatLamaran}}
                            </span>
                            </span>
                        </div>
                        <!-- //.align-items-center -->

                        <div class="d-flex">
                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#how-to-get-there-modal" class="btn fs-9 ls-1 me-3">How To Get There</button> -->
                            <!-- <a href="https://goo.gl/maps/Pzrjm2K3JorMkLVK9?coh=178572&entry=tt" class="page-scroll btn border-0 fs-9 ls-1 text-decoration-underline" target="_blank">View Map</a> -->
                        </div>
                        <!-- //.d-flex -->
                    </div>
                    <!-- //.bg-white -->
                </div>
                @endif
                <!-- //.col-md-9 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->

    </section>
    <!-- Section - The Wedding Event End -->





    @if($data->acara == 'wedding')
    @if(count($data->gallery) > 0)
    <!-- Section - Photos Start -->
    <section id="photos">
        <div class="container position-relative">
            <div class="row mb-5 pb-lg-5">
                <div class="col-12 text-center">
                    <h2 class="font-alt fs-3 fw-bold text-uppercase">Photo Gallery</h2>
                    <p class="font-alt fs-5 fst-italic text-muted">May you live as long as you wish and love as long as you live.</p>
                    <span class="section-divider divider-primary"></span>
                </div>
                <!-- //.col-12 -->
            </div>
            <!-- //.row -->

            <div class="row">
                <div class="col-12">
                    <div class="gallery-wrapper">
                        <div class="gallery-grid">
                            @foreach($data->gallery as $gallery)
                            <div class="item">
                                <figure>
                                    <div class="gallery-img">
                                        <a href="{{asset('project/' . $gallery) }}" data-gall="photos">
                                            <img src="{{asset('project/' . $gallery) }}" alt="">
                                        </a>
                                    </div>
                                    <!-- //.gallery-img -->
                                </figure>
                            </div>
                            @endforeach
                            <!-- //.item -->
                            <!-- //.item -->
                        </div>
                        <!-- //.gallery-grid -->
                    </div>
                    <!-- //.gallery-wrapper -->
                </div>
                <!-- //.col-12 -->
            </div>

            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- Section - Photos End -->
    @endif
    @endif
    <!-- Footer Start -->
    <footer class="bg-img-cover bg-overlay position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="font-alt fs-3 fw-bold text-uppercase text-light">We Can't Wait to See You!</h2>
                    @if($data->acara == 'wedding')
                    <p class="font-alt fs-5 fst-italic text-light">{{$data->tglAkadId}} | {{$data->alamatAkad}}</p>
                    @elseif($data->acara == 'engagement')
                    <p class="font-alt fs-5 fst-italic text-light">{{$data->tglLamaranId}} | {{$data->alamatLamaran}}</p>
                    @endif

                    <img width="100" src="{{ asset('template_web/wedding_1/img/ornament-divider.png')}}" alt="" class="d-block mx-auto">
                </div>
                <!-- //.col-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->

        <!-- Ornament -->
        <span class="ornament-corner ornament-lg ornament-light"></span>
    </footer>
    <!-- Footer End -->
    <audio autoplay>
        <source src="{{asset('project/'.$data->bgmusik)}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Required JS files -->
    <script src="{{ asset('template_web/wedding_1/js/script.min.js')}}"></script>
</body>

</html>