@php
    $services = \App\Models\Service::all();
@endphp

<div class="col-lg-9 services-wrap px-4 pt-5">
    <div class="row pt-md-3">
        @foreach ($services as $service)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="services text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <img src="{{ $service->image_url }}" alt="" style="height: 50px; width:50px" class="image-fluid">
                    </div>
                    <div class="text">
                        <h3>
                            {{ $service->title }}
                        </h3>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                    {{-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                            class="ion-ios-arrow-round-forward"></span></a> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
