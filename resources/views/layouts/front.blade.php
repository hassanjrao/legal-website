<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<title>{{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="{{  asset('front-assets/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{  asset('front-assets/css/animate.css')}}">

	<link rel="stylesheet" href="{{  asset('front-assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{  asset('front-assets/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{  asset('front-assets/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{  asset('front-assets/css/aos.css')}}">

	{{-- <link rel="stylesheet" href="{{  asset('front-assets/css/ionicons.min.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-19/css/ionicons.min.css">

	{{-- <link rel="stylesheet" href="{{  asset('front-assets/css/flaticon.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons/css/all/all.css">

	<link rel="stylesheet" href="{{  asset('front-assets/css/icomoon.css')}}">
    {{-- <script src="https://kit.fontawesome.com/e98e60b820.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link rel="stylesheet" href="{{  asset('front-assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icomoon/1.0.0/style.min.css">


</head>
@php

    $homePage=\App\Models\HomePage::first();
    $practiceAreas=\App\Models\PracticeArea::all();

@endphp

<body>

	<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index-2.html">Legalcare <span>A Law Firm Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index-2.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>
					<li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>
					<li class="nav-item"><a href="case.html" class="nav-link">Case Studies</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item cta"><a href="#" class="nav-link">Free Consultation</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

    {{-- main --}}
    @yield('content')
    {{-- end main --}}

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="logo"><a href="#">Legalcare <span>A Law Firm Agency</span></a></h2>
						<p>{{ $homePage->footer_description }}</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Practice Areas</h2>
						<ul class="list-unstyled">
                            @foreach ($practiceAreas as $practiceArea)

							<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>
                                {{ $practiceArea->title }}
                            </a></li>

                            @endforeach

						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">
                                        {{ $homePage->address }}
                                    </span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">
                                        {{ $homePage->phone }}
                                    </span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">
                                            {{ $homePage->email }}
                                        </span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Business Hours</h2>
						<div class="opening-hours">
							<h4>Opening Days:</h4>
							<p class="pl-3">
								{{ $homePage->opening_days }}
							</p>
							<h4>Vacations:</h4>
							<p class="pl-3">
								{{ $homePage->vacations }}
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						{{ $homePage->copy_right_text }}
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


	<script src="{{  asset('front-assets/js/jquery.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/popper.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/bootstrap.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery.stellar.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/aos.js')}}"></script>
	<script src="{{  asset('front-assets/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{  asset('front-assets/js/scrollax.min.js')}}"></script>
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
	</script> --}}
	{{-- <script src="{{  asset('front-assets/js/google-map.js')}}"></script> --}}
	<script src="{{  asset('front-assets/js/main.js')}}"></script>

</body>


</html>
