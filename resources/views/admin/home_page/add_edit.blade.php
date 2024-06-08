@extends('layouts.backend')

@php
    $addEdit = isset($homePage) ? 'Edit' : 'Add';
    $addUpdate = isset($homePage) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Home Page')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Home Page</h3>

            </div>
            <div class="block-content">

                @if ($homePage)
                    <form action="{{ route('admin.home-page.update', $homePage->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.home-page.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('hero_welcome', $homePage ? $homePage->hero_welcome : null);

                                ?>
                                <label class="form-label" for="label">Hero Welcome <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="hero_welcome" name="hero_welcome" placeholder="Enter Hero Welcome">
                                @error('hero_welcome')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('hero_title', $homePage ? $homePage->hero_title : null);

                                ?>
                                <label class="form-label" for="label">Hero Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="hero_title" name="hero_title" placeholder="Enter Hero Title">
                                @error('hero_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('hero_button_text', $homePage ? $homePage->hero_button_text : null);

                                ?>
                                <label class="form-label" for="label">Hero Button Text <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="hero_button_text" name="hero_button_text" placeholder="Enter Hero Button Text">
                                @error('hero_button_text')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-sm-12">

                                @if($homePage && $homePage->hero_bg_image_path)
                                <img src="{{ $homePage->hero_bg_image_url }}" alt="hero bg image" class="img-fluid">
                                @endif

                                <label class="form-label" for="label">Hero bg image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="hero_bg_image_path"
                                    name="hero_bg_image_path">
                                @error('hero_bg_image_path')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php
                                $value = old('hero_description', $homePage ? $homePage->hero_description : null);

                                ?>
                                <label class="form-label" for="label">Hero Description <span class="text-danger">*</span></label>

                                <textarea required class="form-control" id="hero_description" name="hero_description"
                                    placeholder="Enter Hero Description">{{ $value }}</textarea>

                                @error('hero_description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('services_title', $homePage ? $homePage->services_title : null);

                                ?>
                                <label class="form-label" for="label">Services Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="services_title" name="services_title" placeholder="Enter services_title">
                                @error('services_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php
                                $value = old('services_description', $homePage ? $homePage->services_description : null);

                                ?>
                                <label class="form-label" for="label">Services Description <span class="text-danger">*</span></label>

                                <textarea required class="form-control" id="services_description" name="services_description"
                                    placeholder="Enter Services Description">{{ $value }}</textarea>

                                @error('services_description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                        </div>









                     




                    </div>



                    <div class="d-flex justify-content-end mt-4">

                        <button type="submit" id="submitBtn" class="btn btn-primary  border">{{ $addUpdate }}</button>

                    </div>

                </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
