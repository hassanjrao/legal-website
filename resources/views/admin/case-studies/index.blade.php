@extends('layouts.backend')

@section('page-title', 'Blogs')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Blogs
                </h3>


                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($caseStudies as $ind => $caseStudy)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $caseStudy->title }}</td>
                                    <td>{{ $caseStudy->subtitle }}</td>
                                    <td>
                                        <img src="{{ $caseStudy->image_url }}" alt="" style="width: 100px;">
                                    </td>
                                    <td>{{ $caseStudy->short_description }}</td>

                                    <td>{{ $caseStudy->created_at }}</td>
                                    <td>{{ $caseStudy->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.blogs.edit', $caseStudy->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $caseStudy->id }}"
                                            action="{{ route('admin.blogs.destroy', $caseStudy->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $caseStudy->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
