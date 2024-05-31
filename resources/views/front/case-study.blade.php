@extends('layouts.front')


@section('content')

<x-hero :homePage="$homePage" :pageTitle="'{{ $caseStudy->title }}'" />

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate text-center">
                    <h2 class="mb-3">{{ $caseStudy->title }}</h2>
                    <h4>{{ $caseStudy->subtitle }}</h4>


                </div>

                <div class="col-lg-12">
                    <p>
                        {!! $caseStudy->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
