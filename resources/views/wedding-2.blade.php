<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$jenis}}</title>
	<meta name="description" content="Alife is multipurpose template option for web developer or designer who needs a web template to promote and introduce their business company. Alife is designed for wedding invitation, wedding ceremony or wedding party.">
	<meta name="keywords" content="bride, bridesmaids, countdown, events, gallery, gifts, groom, groomsmen, invitation, rsvp, story, vintage, wedding, wedding template">
	<meta name="author" content="rometheme.net">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="{{ asset('template_web/wedding_2/images/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{ asset('template_web/wedding_2/images/apple-touch-icon.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('template_web/wedding_2/images/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('template_web/wedding_2/images/apple-touch-icon-114x114.png')}}">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/bootstrap.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/vendor/animate.min.css')}}">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('template_web/wedding_2/css/style.css')}}" />

	<script src="{{ asset('template_web/wedding_2/js/vendor/modernizr.min.js')}}"></script>

</head>

<body data-spy="scroll" data-target="#navbar-main">

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1">

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
				<nav id="navbar-main" class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="index.html">
						<!-- <img src="images/logo.png" alt="" /> -->
						<h1 style="font-size: 30px;">{{$data->namaPria}} & {{$data->namaWanita}}</h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#story">Our Story</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#events">Events</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#gallery">Gallery</a>
							</li>

						</ul>

					</div>
				</nav> <!-- -->
			</div>
		</div>

	</div>

	<!-- BANNER -->
	<div id="home" class="banner">
		<div class="owl-carousel owl-theme full-screen">
			<div class="item">
				<img src="images/cover.webp" alt="Slider">
				<div class="overlay-bg"></div>
				<div class="container d-flex align-items-center h-center">
					<div class="wrap-caption">
						<div class="uk24 text-white">The Wedding Celebration of</div>
						<h1 class="caption-heading">{{$data->namaPria}} & {{$data->namaWanita}}</h1>
						<p class="uk21">{{$data->dayOfWeek}}, {{$data->dayOfMonth}} {{$data->month}} {{$data->year}}</p>
						<div class="separator-banner"><i class="fa fa-heart"></i></div>
					</div>
				</div>
			</div>

		</div>
		<div class="custom-nav owl-nav"></div>
	</div>

	<!-- ABOUT -->
	<div id="story" class="section">
		<div class="content-wrap">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							We invite you<br>to our special Wedding
						</h2>
						<div class="separator-section text-center">
							<div class="fa fa-heart"></div>
						</div>

					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-6">
						<div class="box-wedding">
							<div class="people">
								@if($data->fotoPria != '')
								<img src="{{ asset('project/' . $data->fotoPria) }}" alt="" class="rounded-circle" style="object-fit: cover;">
								@endif
							</div>
							<div class="people-info">
								<div class="name">{{$data->namaLengkapPria}}</div>
								<h3 class="position">{{$data->ayahPria}} - {{$data->ibuPria}}</h3>

							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6">
						<div class="box-wedding">
							<div class="people">
								@if($data->fotoWanita != '')
								<img src="{{ asset('project/' . $data->fotoWanita) }}" alt="" class="rounded-circle" style="object-fit: cover;">
								@endif
							</div>
							<div class="people-info">
								<div class="name">{{$data->namaLengkapWanita}}</div>
								<h3 class="position">{{$data->ayahWanita}} - {{$data->ibuWanita}}</h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR PEOPLE -->
	<div class="section bgi-cover-center" data-background="{{ asset('template_web/wedding_2/images/dummy-img-1920x900-2.jpg')}}">
		<div class="content-wrap">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							Our Love Messages
						</h2>
						<div class="separator-section text-center">
							<div class="fa fa-heart"></div>
						</div>

					</div>
				</div>

				<div class="row mt-5">

					<div class="col-sm-12 col-md-8 offset-md-2">

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="text-center">
									<img src="images/cover.webp" alt="" class="shadow-lg img-fluid mb-3">
									<h2>From us,</h2>
									<p>{{$data->kataPengantar}}</p>
								</div>
							</div>

						</div>


					</div>
				</div>


			</div>
		</div>
	</div>


	<!-- CTA -->
	<div class="section bgi-cover-center bg-overlay-secondary" data-background="{{ asset('template_web/wedding_2/images/wedding.webp')}}">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<h1 class="text-center text-white">
							"There is only one happiness in life, to love and be loved".
						</h1>
						<p class="uk18 text-center text-primary-light">- George Sands -</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- EVENTS -->
	<div id="events">
		<div class="content-wrap">


			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							Wedding Events
						</h2>
						<div class="separator-section text-center">
							<div class="fa fa-heart"></div>
						</div>

					</div>
				</div>
				<div class="row mt-5">
					<div class="col-sm-12 col-md-12">


						<div class="box-events">
							@if($data->acara == 'wedding')
							<div class="box-event bgi-cover-center" data-background="{{ asset('template_web/wedding_2/images/wedding.webp')}}">
								<div class="event-location">
									<a href="#"><i class="fa fa-facebook"></i></a> Check location here
								</div>
								<div class="event-info col-md-5 offset-md-6">
									<h2>Wedding Ceremony</h2>
									<p class="font-weight-bold">{{$data->alamatAkad}}</p>
									<p class="mb-0">{{$data->tglAkadId}}</p>
									<p> {{$data->waktuAkad}} pm</p>
								</div>
							</div>
							@if($data->alamatAkad != '')
							<div class="box-event bgi-cover-center" data-background="{{ asset('template_web/wedding_2/images/celeb.webp')}}">
								<div class="event-location">
									<a href="#"><i class="fa fa-facebook"></i></a> Check location here
								</div>
								<div class="event-info col-md-5 offset-md-1">
									<h2>Party Ceremony</h2>
									<p class="font-weight-bold">{{$data->alamatResepsi}}</p>
									<p class="mb-0">{{$data->tglResepsiId}}</p>
									<p> {{$data->waktuResepsi}} pm</p>
								</div>
							</div>
							@endif
							@elseif($data->acara == 'engagement')
							<div class="box-event bgi-cover-center" data-background="{{ asset('template_web/wedding_2/images/wedding.webp')}}">
								<div class="event-location">
									<a href="#"><i class="fa fa-facebook"></i></a> Check location here
								</div>
								<div class="event-info col-md-5 offset-md-6">
									<h2>Wedding Ceremony</h2>
									<p class="font-weight-bold">{{$data->alamatLamaran}}</p>
									<p class="mb-0">{{$data->tglLamaranId}}</p>
									<p> {{$data->waktuLamaran}} pm</p>
								</div>
							</div>
							@endif
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>


	@if($data->acara == 'wedding')
	@if(count($data->gallery) > 0)
	<!-- PORTFOLIO -->
	<div id="gallery" class="section">
		<div class="content-wrap">


			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							Photo Gallery
						</h2>
						<div class="separator-section text-center">
							<div class="fa fa-heart"></div>
						</div>

					</div>
				</div>
				<div class="row popup-gallery gutter-5 mt-5">
					@foreach($data->gallery as $gallery)
					<!-- Item 1 -->
					<div class="col-sm-6 col-md-3">
						<div class="box-gallery">
							<a href="{{asset('project/' . $gallery) }}" title="">
								<img src="{{asset('project/' . $gallery) }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					@endforeach

				</div>

			</div>
		</div>
	</div>
	@endif
	@endif
	<!-- CTA -->
	<div class="section bgi-cover-center bg-overlay-secondary" data-background="images/celeb.webp">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h1 class="text-center text-white">
							Don't Miss it
						</h1>
						<p class="uk18 text-center text-primary-light">{{$data->dayOfWeek}}, {{$data->dayOfMonth}} {{$data->month}} {{$data->year}}</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer">

		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
					<div class="spacer-content"></div>
					<div class="text-center">
						<h3>Thank You</h3>
						<h1 class="text-primary">{{$data->namaPria}} & {{$data->namaWanita}}</h1>
						<div class="separator-banner"><i class="fa fa-heart"></i></div>
					</div>
					<div class="mt-5"></div>
				</div>
			</div>
		</div>

		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<p class="mt-3 text-center">Copyright <span class="text-primary">Wedding Of {{$data->namaPria}} & {{$data->namaWanita}} </span>. Created by <span class="text-primary">Invite You Invitation</span></p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- JS VENDOR -->
	<script src="{{ asset('template_web/wedding_2/js/vendor/jquery.min.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/owl.carousel.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/imagesloaded.pkgd.min.js')}}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('template_web/wedding_2/js/vendor/validator.min.js')}}"></script>
	<script src="{{ asset('template_web/wedding_2/js/vendor/form-scripts.js')}}"></script>

	<!-- GOOGLEMAP -->
	<script src="{{ asset('template_web/wedding_2/js/googlemap-setting.js')}}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap"> </script>

	<script src="{{ asset('template_web/wedding_2/js/script.js')}}"></script>

</body>

</html>