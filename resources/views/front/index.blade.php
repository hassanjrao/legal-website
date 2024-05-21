@extends('layouts.front')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ $homePage->hero_bg_image_url }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
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
    <x-about :about="$aboutUs" />
    {{-- end about us --}}

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
                    <a href="case.html" class="btn btn-primary px-5">See All Successful Cases</a>
                </div>
            </div>
        </div>
    </section>

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


    <section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url('{{ asset('front-assets/images/bg_2.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                    <span class="subheading">Booking an Appointment</span>
                    <h2 class="mb-4">Free Consultation</h2>
                    <form action="#" class="consultation">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


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


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-md-8 py-4 px-md-4 bg-primary">
                    <div class="row">
                        <div class="col-md-6 ftco-animate d-flex align-items-center">
                            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
