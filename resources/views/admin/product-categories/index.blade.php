@extends('layouts.backend')
@section('page-title', 'Product Categories')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Product Categories
                </h3>


                <a href="{{ route('admin.product-categories.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($productCategories as $ind => $category)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.product-categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-alt-primary">Edit</a>

                                        <form id="form-{{ $category->id }}"
                                            action="{{ route('admin.product-categories.destroy', $category->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="button" onclick="confirmDelete({{ $category->id }})"
                                                class="btn btn-sm btn-alt-danger" value="Delete">

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
