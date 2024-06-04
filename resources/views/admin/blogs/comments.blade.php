@extends('layouts.backend')

@section('page-title', 'Blog Comments')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Blog {{ $blog->title }} Comments
                </h3>


                <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">All Blogs</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($blog->comments as $ind => $comment)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->email }}</td>
                                    <td>{{ $comment->message }}</td>

                                    <td>{{ $comment->created_at }}</td>
                                    <td>{{ $comment->updated_at }}</td>

                                    <td>



                                        <form id="form-{{ $comment->id }}"
                                            action="{{ route('admin.blogs.comments.delete', ['comment_id'=>$comment->id,'id'=>$blog->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $comment->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
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
