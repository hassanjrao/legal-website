@extends('layouts.backend')

@php
    $addEdit = isset($page) ? 'Edit' : 'Add';
    $addUpdate = isset($page) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Page')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Page</h3>

            </div>
            <div class="block-content">

                @if ($page)
                    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                $value = old('title', $page ? $page->title : null);

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

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?php
                                $value = old('slug', $page ? $page->slug : null);

                                ?>
                                <label class="form-label" for="label"> Slug <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="slug" name="slug" placeholder="Enter Slug">
                                @error('slug')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php
                                $value = old('meta_tags', $page ? $page->meta_tags : null);

                                ?>
                                <label class="form-label" for="label">Meta Tags <span
                                        class="text-danger">*</span></label>

                                <textarea class="form-control" name="meta_tags">{!! $value !!}</textarea>

                                @error('meta_tags')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php
                                $value = old('content', $page ? $page->content : null);

                                ?>
                                <label class="form-label" for="label">Content <span
                                        class="text-danger">*</span></label>

                                <textarea id="editor" name="content" style="display: none;">{!! $value !!}</textarea>

                                @error('content')
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
