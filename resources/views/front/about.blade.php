@extends('layouts.front')


@section('content')

    <x-hero :homePage="$homePage" :pageTitle="'About Us'" />

    <x-about :about="$aboutUs" />


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

    <x-newsletter />
@endsection
