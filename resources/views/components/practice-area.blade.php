@props(['practiceArea'])

<div class="col-md-3 text-center">
    <div class="practice-area ftco-animate">
        <div class="icon d-flex justify-content-center align-items-center">
            <img src="{{ $practiceArea->image_url }}" alt="" style="height: 50px; width:50px" class="image-fluid">
        </div>
        <h3><a href="practice-single.html">
                {{ $practiceArea->title }}
            </a></h3>
        <p>
            {{ $practiceArea->description }}
        </p>
        {{-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center">
            <span class="ion-ios-arrow-round-forward"></span>
        </a> --}}
    </div>
</div>
