@extends('layouts.backend')

@section('page-title', 'Announcement')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">

            </div>
            <div class="block-content">
                <form action="{{ route('admin.announcement.update', $announcement->id) }}" method="POST"
                    enctype="multipart/form-data">
{{--  --}}
                    @csrf
                    @method('PUT')

                    <div class="row push justify-content-center">

                        <div class="col-lg-12 ">

                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="label">Text</label>
                                    <input required type="text" value="{{ $announcement->title }}" class="form-control"
                                        id="name" name="title">
                                </div>



                            </div>





                        </div>



                    </div>

                    <div class="d-flex justify-content-end mb-4">

                        <button type="submit" class="btn btn-primary  border">Update</button>

                    </div>




                </form>
            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection


