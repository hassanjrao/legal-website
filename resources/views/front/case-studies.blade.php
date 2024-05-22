@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Case Studies'" />

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-case owl-carousel ftco-owl">
                    @foreach ($caseStudies as $case)
                        <x-case-study :case="$case" />
                    @endforeach
                </div>
            </div>

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
             {{ $caseStudies->links() }}
            </div>
          </div>
        </div>
    	</div>
    </section>


    <x-newsletter />
@endsection
