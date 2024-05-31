@extends('layouts.backend')

@php
    $addEdit = isset($practiceArea) ? 'Edit' : 'Add';
    $addUpdate = isset($practiceArea) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Practice Area')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Practice Area</h3>

            </div>
            <div class="block-content">

                @if ($practiceArea)
                    <form action="{{ route('admin.practice-areas.update', $practiceArea->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.practice-areas.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                $value = old('title', $practiceArea ? $practiceArea->title : null);

                                ?>
                                <label class="form-label" for="label"> Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="title" name="title" placeholder="Enter Title">
                                @error('title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-12">

                                @if ($practiceArea && $practiceArea->image_path)
                                    <img src="{{ $practiceArea->image_url }}" alt="image" class="img-fluid">
                                @endif

                                <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="image_path"
                                    {{ $practiceArea ? '' : 'required' }} name="image">
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="row mb-4">



                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php
                                $value = old('description', $practiceArea ? $practiceArea->description : null);

                                ?>
                                <label class="form-label" for="label">Description <span
                                        class="text-danger">*</span></label>

                                <textarea required class="form-control" id="description" name="description" placeholder="Enter description">{{ $value }}</textarea>

                                @error('description')
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
