@extends('layouts.backend')

@php
    $addEdit = isset($caseStudy) ? 'Edit' : 'Add';
    $addUpdate = isset($caseStudy) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Case Study')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Case Study</h3>

            </div>
            <div class="block-content">

                @if ($caseStudy)
                    <form action="{{ route('admin.case-studies.update', $caseStudy->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.case-studies.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <?php
                                $value = old('title', $caseStudy ? $caseStudy->title : null);

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

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <?php
                                $value = old('subtitle', $caseStudy ? $caseStudy->subtitle : null);

                                ?>
                                <label class="form-label" for="label"> subTitle <span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="subtitle" name="subtitle" placeholder="Enter subTitle">
                                @error('subtitle')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12">

                                @if ($caseStudy && $caseStudy->image_path)
                                    <img src="{{ $caseStudy->image_url }}" alt="image" class="img-fluid">
                                @endif

                                <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="image_path"
                                    {{ $caseStudy ? '' : 'required' }} name="image">
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="row mb-4">



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php
                                $value = old('description', $caseStudy ? $caseStudy->description : null);

                                ?>
                                <label class="form-label" for="label">Description <span
                                        class="text-danger">*</span></label>

                                <textarea id="editor" name="description" style="display: none;">{!! $value !!}</textarea>

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

   <!-- Page JS Plugins -->
   {{-- <script src="{{ asset('js/plugins/ckeditor5-classic/build/ckeditor.js') }}"></script> --}}
   <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

   <!-- Page JS Helpers (CKEditor 5 plugins) -->
   {{-- <script>One.helpersOnLoad(['js-ckeditor5']);</script> --}}

   <script>
     ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection
