@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Contact Us'" />



    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span>
                        {{ $homePage->address }}
                    </p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">
                            {{ $homePage->phone }}
                    </a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">
                            {{ $homePage->email }}
                        </a></p>
                </div>
            </div>
            <div class="row block-9 no-gutters">
                <div class="col-lg-6 order-md-last d-flex">
                    <form action="{{ route('contact.submit') }}" class="bg-light p-5 contact-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" required class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" required class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea required name="message" required cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-lg-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>


    <x-newsletter />
@endsection
