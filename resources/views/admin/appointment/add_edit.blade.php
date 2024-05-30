@extends('layouts.backend')

@php
    $addEdit = isset($homePage) ? 'Edit' : 'Add';
    $addUpdate = isset($homePage) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Appointment')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Appointment</h3>

            </div>
            <div class="block-content">

                @if ($homePage)
                    <form action="{{ route('admin.appointment.update', $homePage->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.appointment.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('appointment_title', $homePage ? $homePage->appointment_title : null);

                                ?>
                                <label class="form-label" for="label">Appointment Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="appointment_title" name="appointment_title" placeholder="Enter appointment title">
                                @error('appointment_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('appointment_subtitle', $homePage ? $homePage->appointment_subtitle : null);

                                ?>
                                <label class="form-label" for="label">Hero Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="appointment_subtitle" name="appointment_subtitle" placeholder="Enter appointment subtitle">
                                @error('appointment_subtitle')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">

                                @if($homePage && $homePage->appointment_bg_image_path)
                                <img src="{{ $homePage->appointment_bg_image_url }}" alt="hero bg image" class="img-fluid">
                                @endif

                                <label class="form-label" for="label">Appointment BG Image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="appointment_bg_image_path"
                                    name="appointment_bg_image_path">
                                @error('appointment_bg_image_path')
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
