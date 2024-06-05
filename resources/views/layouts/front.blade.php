<!DOCTYPE html>
<html lang="en">

    @php
        $settings = \App\Models\Setting::first();
    @endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front-assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('front-assets/css/aos.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-19/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons/css/all/all.css">

    <link rel="stylesheet" href="{{ asset('front-assets/css/icomoon.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icomoon/1.0.0/style.min.css">

    <link rel="shortcut icon" href="{{ $settings->logo_url }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ $settings->favicon_url }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $settings->favicon_url }}">




    @php
        // get page name from url
        $pageName = request()->segment(1) ?? 'home';

        $page = \App\Models\Page::where('name', $pageName)->first();

    @endphp

    <title>
        @yield('page-title', $page ? $page->title : 'Home')
    </title>

    @if ($page)
        {!! $page->meta_tags !!}
    @endif

</head>
@php

    $homePage = \App\Models\HomePage::first();
    $practiceAreas = \App\Models\PracticeArea::all();

    $pages = \App\Models\Page::all();
    $dynamicPages = \App\Models\Page::where('is_active', 1)->where('is_static', 0)->get();

@endphp

<body>

    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">


            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ $settings->logo_url }}" alt="logo" style="width: 100px; height: 100px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
                Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    @foreach ($pages as $page)
                        @if ($page->name == 'home' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == '' ? 'active' : '' }}">
                                <a href="{{ route('home') }}" class="nav-link">
                                    {{ $page->title }}
                                </a>
                            </li>
                        @endif
                        @if ($page->name == 'about' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'about' ? 'active' : '' }}"><a
                                    href="{{ route('about-us') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                        @if ($page->name == 'attorneys' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'attorneys' ? 'active' : '' }} "><a
                                    href="{{ route('attorneys') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                        @if ($page->name == 'practice-areas' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'practice-areas' ? 'active' : '' }}"><a
                                    href="{{ route('practice-areas') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                        @if ($page->name == 'case-studies' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'case-studies' ? 'active' : '' }}"><a
                                    href="{{ route('case-studies') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                        @if ($page->name == 'blogs' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'blogs' ? 'active' : '' }}"><a
                                    href="{{ route('blogs') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                        @if ($page->name == 'contact' && $page->is_active)
                            <li class="nav-item {{ request()->segment(1) == 'contact' ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}" class="nav-link">{{ $page->title }}</a></li>
                        @endif
                    @endforeach

                    {{-- menu with submenu --}}
                    @if (isset($dynamicPages) && count($dynamicPages) > 0)
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                            <div class="dropdown-menu">
                                @foreach ($dynamicPages as $page)
                                    <a href="{{ route('page', $page->slug) }}"
                                        class="dropdown-item">{{ $page->title }}</a>
                                @endforeach
                            </div>
                        </li>
                    @endif



                    <li class="nav-item cta"><a
                            href="{{ request()->segment(1) == '' || request()->segment(1) == 'about' ? '#appointment' : route('about-us') . '#appointment' }}"
                            class="nav-link">Free Consultation</a></li>
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
                        {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul> --}}
                    </div>
                </div>
                @php
                    $practiceAreaPage = $pages->where('slug', 'practice-areas')->first();
                @endphp
                @if ($practiceAreaPage && $practiceAreaPage->is_active)

                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Practice Areas</h2>
                            <ul class="list-unstyled">
                                @foreach ($practiceAreas as $practiceArea)
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="ion-ios-arrow-forward mr-3"></span>
                                            {{ $practiceArea->title }}
                                        </a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                @endif
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="fa fa-map-marker" style="margin-right: 20px !important"></span>
                                    <span class="text">
                                        {{ $homePage->address }}
                                    </span>
                                </li>
                                <li><a href="#"><span class="fa fa-phone"
                                            style="margin-right: 20px !important"></span>
                                        <span class="text">
                                            {{ $homePage->phone }}
                                        </span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="fa fa-paper-plane"
                                            style="margin-right: 20px !important"></span>
                                        <span class="text">
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


    <script src="{{ asset('front-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/aos.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
	</script> --}}
    {{-- <script src="{{  asset('front-assets/js/google-map.js')}}"></script> --}}
    <script src="{{ asset('front-assets/js/main.js') }}"></script>

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')


@yield('scripts')


</html>
