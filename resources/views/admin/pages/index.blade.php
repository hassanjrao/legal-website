@extends('layouts.backend')

@section('page-title', 'Pages')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Pages
                </h3>


                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Is Active</th>
                                <th>Meta Tags</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($pages as $ind => $blog)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @if ($blog->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $blog->meta_tags }}</td>
                                    <td>{{ $blog->short_content }}</td>

                                    <td>{{ $blog->created_at }}</td>
                                    <td>{{ $blog->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.pages.edit', $blog->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $blog->id }}"
                                            action="{{ route('admin.pages.destroy', $blog->id) }}" method="POST">
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
