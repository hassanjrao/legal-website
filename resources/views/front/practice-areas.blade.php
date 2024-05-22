@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Practice Areas'" />


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach ($practiceAreas as $practiceArea)

                    <x-practice-area :practiceArea="$practiceArea" />

                @endforeach

            </div>
        </div>
    </section>


    <x-newsletter />
@endsection
