@extends('layouts.backend')

@php
    $addEdit = isset($about) ? 'Edit' : 'Add';
    $addUpdate = isset($about) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' About')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} About</h3>

            </div>
            <div class="block-content">

                @if ($about)
                    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('title', $about ? $about->title : null);

                                ?>
                                <label class="form-label" for="label">About Title <span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="title" name="title" placeholder="Enter about title">
                                @error('title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('subtitle', $about ? $about->subtitle : null);

                                ?>
                                <label class="form-label" for="label">About Sub Title <span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="subtitle" name="subtitle" placeholder="Enter about subtitle">
                                @error('subtitle')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('experience', $about ? $about->strip_text : null);

                                ?>
                                <label class="form-label" for="label">Experience <span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="experience" name="experience" placeholder="Enter about experience">
                                @error('experience')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                        </div>

                        <div class="row mb-4">


                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php
                                $value = old('description', $about ? $about->description : null);

                                ?>
                                <label class="form-label" for="label">About Description <span
                                        class="text-danger">*</span></label>

                                <textarea required class="form-control" id="description" name="description" placeholder="Enter about description">{{ $value }}</textarea>

                                @error('description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-4 justify-content-between">



                            <div class="col-lg-4 col-md-4 col-sm-12">

                                @if ($about && $about->image_path)
                                    <img src="{{ $about->image_url }}" alt="image" class="img-fluid">
                                @endif

                                <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="image_path"
                                    name="image_path">
                                @error('image_path')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">

                                @if ($about && $about->video_path)
                                    <video width="320" height="240" controls>
                                        <source src="{{ $about->video_url }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif

                                <label class="form-label" for="label">Video <span class="text-danger">*</span></label>
                                <input type="file" accept="video/*"
                                 class="form-control" id="video_path"
                                    name="video_path">
                                @error('video_path')
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
