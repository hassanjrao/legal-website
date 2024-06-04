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
                                <th>Image</th>
                                <th>Small Description</th>
                                <th>Description</th>
                                <th>Total Comments</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($blogs as $ind => $blog)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <img src="{{ $blog->image_url }}" alt="" style="width: 100px;">
                                    </td>
                                    <td>{{ $blog->small_description }}</td>
                                    <td>{{ $blog->short_description }}</td>
                                    <td>{{ $blog->comments_count }}</td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>{{ $blog->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        {{-- comments --}}
                                        <a href="{{ route('admin.blogs.comments', $blog->id) }}" class="btn btn-sm btn-info"
                                            data-toggle="tooltip" title="Comments">
                                            <i class="fa fa-comments"></i>
                                        </a>


                                        <form id="form-{{ $blog->id }}"
                                            action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $blog->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
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
