@extends('layouts.front')

@section('content')
    <x-hero :homePage="$homePage" :pageTitle="'Blogs'" />


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <x-blog :blog="$blog" />
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-newsletter />
@endsection
