@props(['about'])

@php
    $aboutUsTabs = \App\Models\AboutUsTab::all();
@endphp

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                    style="background-image: url('{{ $about->image_url }}');">
                    <a href="{{ $about->video_url }}"
                        class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        {{-- <span class="icon-play"></span> --}}
                        {{-- <i class="fa-solid fa-play"></i> --}}
                        <i class="fa-solid fa-play" style="color: #fff"
                        ></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">
                            {{ $about->title }}
                        </span>
                        <h2 class="mb-4">
                            {{ $about->subtitle }}
                        </h2>
                        <p>
                            {{ $about->description }}
                        </p>
                        <div class="tabulation-2 mt-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                @foreach ($aboutUsTabs as $ind=> $tab)
                                    <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link {{ $ind==0 ? 'active':'' }} py-2" data-toggle="tab"
                                            href="#tab{{ $tab->id }}">{{ $tab->title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="tab-content bg-light rounded mt-2">
                                @foreach ($aboutUsTabs as $ind=> $tab)
                                    <div class="tab-pane container p-0 {{ $ind==0 ? 'active':'' }}" id="tab{{ $tab->id }}">
                                        <p>

                                            {{ $tab->description }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="years d-flex mt-4 mt-md-5">
                            <h4>
                                {{-- <span class="number mr-2" data-number="40">0</span> --}}
                                <span>
                                    {{ $about->strip_text }}
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
