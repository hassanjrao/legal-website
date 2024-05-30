@extends('layouts.backend')

@php
    $addEdit = isset($tab) ? 'Edit' : 'Add';
    $addUpdate = isset($tab) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Tab')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Tab</h3>

            </div>
            <div class="block-content">

                @if ($tab)
                    <form action="{{ route('admin.about-tabs.update', $tab->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.about-tabs.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('title', $tab ? $tab->title : null);

                                ?>
                                <label class="form-label" for="label">Tab Title <span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="title" name="title" placeholder="Enter tab title">
                                @error('title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php
                                $value = old('description', $tab ? $tab->description : null);

                                ?>
                                <label class="form-label" for="label">tab Description <span
                                        class="text-danger">*</span></label>

                                <textarea required class="form-control" id="description" name="description" placeholder="Enter tab description">{{ $value }}</textarea>

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
