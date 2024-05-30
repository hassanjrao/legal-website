@props(['homePage', 'pageTitle'])

@php
    // get page name from url
    $pageName = request()->segment(1) ?? 'home';
    $page = \App\Models\Page::where('name', $pageName)->first();
@endphp

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ $homePage->hero_bg_image_url }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">
                    {{ $page ? $page->title : $pageTitle }}
                </h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">
                            Home
                            <i class="ion-ios-arrow-forward"></i></a></span> <span>
                        {{ $page ? $page->title : $pageTitle }}
                        <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
