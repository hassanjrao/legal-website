@extends('layouts.front')
@php

    $pages = \App\Models\Page::all();
@endphp
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ $homePage->hero_bg_image_url }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate " style="margin-top: 140px !important">
                    <h2 class="subheading">
                        {{ $homePage->hero_welcome }}
                    </h2>
                    <h1>
                        {{ $homePage->hero_title }}
                        {{-- <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "Freedom.", "Rights.", "Case.", "Custody." ]'></span> --}}
                    </h1>
                    <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
                    <p class="mb-4">
                        {{ $homePage->hero_description }}
                    </p>
                    <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">{{ $homePage->hero_button_text }}
                            <span class="ion-ios-arrow-forward"></span>

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-5">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">{{ $homePage->services_title }}</h2>
                        <p>
                            {{ $homePage->services_description }}
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Free Consultation</a></p>
                    </div>
                </div>
                {{-- services --}}
                <x-services />
                {{-- end services --}}
            </div>
        </div>
    </section>

    {{-- about us --}}
    @php
        $aboutPage = $pages->where('slug', 'about')->first();
    @endphp
    @if ($aboutPage && $aboutPage->is_active)
        <x-about :about="$aboutUs" />
    @endif
    {{-- end about us --}}

    @php
        $caseStudyPage = $pages->where('slug', 'case-studies')->first();
    @endphp

    @if ($caseStudyPage && $caseStudyPage->is_active)
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-10 text-center heading-section ftco-animate">
                        <span class="subheading">Explore Case Studies</span>
                        <h2 class="mb-4">1000+ Completed Cases Successfully</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-case owl-carousel ftco-owl">
                            @foreach ($caseStudies as $case)
                                <x-case-study :case="$case" />
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <a href="{{ route('case-studies') }}" class="btn btn-primary px-5">See All Successful Cases</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @php
        $attornyPage = $pages->where('slug', 'attorneys')->first();
    @endphp

    @if ($attornyPage && $attornyPage->is_active)
        <section class="ftco-section ftco-no-pt">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Our Attorney</span>
                        <h2 class="mb-4">Our Legal Attorneys</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($attornies as $attorny)
                        <x-attorney :attorney="$attorny" />
                    @endforeach

                </div>
            </div>
        </section>
    @endif


    <x-appointment :homePage="$homePage" />


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach ($testimonials as $testimonial)
                            <x-testimonial :testimonial="$testimonial" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $blogPage = $pages->where('slug', 'blogs')->first();
    @endphp
    @if ($blogPage && $blogPage->is_active)
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Our Blog</span>
                        <h2>Recent Blog</h2>
                    </div>
                </div>
                <div class="row d-flex">
                    @foreach ($blogs as $blog)
                        <x-blog :blog="$blog" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <x-newsletter />
@endsection
