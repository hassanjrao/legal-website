@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Case Studies'" />

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($caseStudies as $case)
                    <div class="col-md-4">
                        <x-case-study :case="$case" />
                    </div>
                @endforeach



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
