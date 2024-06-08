@extends('layouts.backend')

@php
    $addEdit = isset($homePage) ? 'Edit' : 'Add';
    $addUpdate = isset($homePage) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Footer')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Footer</h3>

            </div>
            <div class="block-content">

                @if ($homePage)
                    <form action="{{ route('admin.footer.update', $homePage->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.footer.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">


                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <?php
                                $value = old('footer_title', $homePage ? $homePage->footer_title : null);

                                ?>
                                <label class="form-label" for="label">Footer Title <span class="text-danger">*</span></label>

                                <input required class="form-control" id="footer_title" name="footer_title"
                                    placeholder="Enter Footer Title" value="{{ $value }}"></input>

                                @error('footer_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <?php
                                $value = old('footer_description', $homePage ? $homePage->footer_description : null);

                                ?>
                                <label class="form-label" for="label">Footer Description <span class="text-danger">*</span></label>

                                <textarea required class="form-control" id="footer_description" name="footer_description"
                                    placeholder="Enter Footer Description">{{ $value }}</textarea>

                                @error('footer_description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('business_hours_title', $homePage ? $homePage->business_hours_title : null);

                                ?>
                                <label class="form-label" for="label">Business hours title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="business_hours_title" name="business_hours_title" placeholder="Enter Business hours title">
                                @error('business_hours_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('opening_days_title', $homePage ? $homePage->opening_days_title : null);

                                ?>
                                <label class="form-label" for="label">Opening Days Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="opening_days_title" name="opening_days_title" placeholder="Enter Opening Days Title">
                                @error('opening_days_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('opening_days', $homePage ? $homePage->opening_days : null);

                                ?>
                                <label class="form-label" for="label">Opening Days <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="opening_days" name="opening_days" placeholder="Enter Opening Days">
                                @error('opening_days')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('vacations_title', $homePage ? $homePage->vacations_title : null);

                                ?>
                                <label class="form-label" for="label">Vacations title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="vacations_title" name="vacations_title" placeholder="Enter Vacations title">
                                @error('vacations_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('vacations', $homePage ? $homePage->vacations : null);

                                ?>
                                <label class="form-label" for="label">Vacations <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="vacations" name="vacations" placeholder="Enter Vacations">
                                @error('vacations')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                        </div>

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('have_question_title', $homePage ? $homePage->have_question_title : null);

                                ?>
                                <label class="form-label" for="label">Have question title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="have_question_title" name="have_question_title" placeholder="Enter have question title">
                                @error('have_question_title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                $value = old('address', $homePage ? $homePage->address : null);

                                ?>
                                <label class="form-label" for="label">Address <span class="text-danger">*</span></label>
                                <textarea required type="text" class="form-control"
                                    id="address" name="address" placeholder="Enter address">{{ $value }}</textarea>
                                @error('address')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="row mb-4">


                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <?php
                                $value = old('phone', $homePage ? $homePage->phone : null);

                                ?>
                                <label class="form-label" for="label">Phone <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="phone" name="phone" placeholder="Enter phone">
                                @error('phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('email', $homePage ? $homePage->email : null);

                                ?>
                                <label class="form-label" for="label">Email <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="email" name="email" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('copy_right_text', $homePage ? $homePage->copy_right_text : null);

                                ?>
                                <label class="form-label" for="label">Copy Right Text <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="copy_right_text" name="copy_right_text" placeholder="Enter Copy Right Text">
                                @error('copy_right_text')
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
