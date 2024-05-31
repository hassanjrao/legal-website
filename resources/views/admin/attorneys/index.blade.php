@extends('layouts.backend')

@section('page-title', 'Attorneys')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Attorneys
                </h3>


                <a href="{{ route('admin.attorneys.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($attorneys as $ind => $attorney)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $attorney->name }}</td>
                                    <td>{{ $attorney->position }}</td>
                                    <td>
                                        <img src="{{ $attorney->image_url }}" alt="" style="width: 100px;">
                                    </td>
                                    <td>{{ $attorney->description }}</td>

                                    <td>{{ $attorney->created_at }}</td>
                                    <td>{{ $attorney->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.attorneys.edit', $attorney->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $attorney->id }}"
                                            action="{{ route('admin.attorneys.destroy', $attorney->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $attorney->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
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
