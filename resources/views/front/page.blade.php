@extends('layouts.front')

@section('content')
@php
    $pageTitle = $page->title;
@endphp
    <x-hero :homePage="$homePage" :pageTitle="$pageTitle" />

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-lg-12 ftco-animate fadeInUp ftco-animated">

                    <div class="text-center">
                        <h2 class="mb-3">{{ $page->title }}</h2>
                    </div>

                    <div>
                        {!! $page->content !!}
                    </div>



                </div> <!-- .col-md-8 -->


            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('img').addClass('img-fluid');
    });
</script>
@endsection
