@props(['blog'])

<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <div class="text px-4 py-4">
            <h3 class="heading mb-0"><a href="#">
                    {{ $blog->title }}
                </a></h3>
        </div>
        <a href="blog-single.html" class="block-20"
            style="background-image: url('{{ asset('front-assets/images/image_1.jpg') }}');">
        </a>
        <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">
                        {{ $blog->created_at->format('d') }}
                    </span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">
                        {{ $blog->created_at->format('Y') }}
                    </span>
                    <span class="mos">
                        {{ $blog->created_at->format('M') }}
                    </span>
                </div>
            </div>
            <p>
                {{ $blog->small_description }}
            </p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
        </div>
    </div>
</div>
