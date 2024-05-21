@extends('layouts.backend')
@section('page-title', 'Products')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Products
                </h3>


                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Sizes</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($products as $ind => $product)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->productCategory->name
                                     }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        @foreach ($product->sizes as $size)
                                            <span class="badge bg-primary">{{ $size }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="btn btn-sm btn-alt-primary">Edit</a>

                                        <form id="form-{{ $product->id }}"
                                            action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="button" onclick="confirmDelete({{ $product->id }})"
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
