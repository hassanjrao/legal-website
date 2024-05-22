@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Attorneys'" />

    <section class="ftco-section">
        <div class="container-fluid px-md-5">
            <div class="row">

                @foreach ($attornies as $attorny)
                    <x-attorney :attorney="$attorny" />
                @endforeach

            </div>
        </div>
    </section>

    <x-newsletter />
@endsection
