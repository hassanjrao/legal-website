@extends('layouts.backend')

@php
    $addEdit = isset($product) ? 'Edit' : 'Add';
    $addUpdate = isset($product) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' product')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Product</h3>


                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">All Products</a>


            </div>
            <div class="block-content">

                @if ($product)
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('name', $product ? $product->name : null);

                                ?>
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="name" name="name" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('product_category_id', $product ? $product->product_category_id : null);

                                ?>
                                <label class="form-label" for="label">Product Category <span
                                        class="text-danger">*</span></label>
                                <select required name="product_category_id" class="form-select">
                                    <option value="">Select Category</option>
                                    @foreach ($productCategories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($value == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_category_id')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('price', $product ? $product->price : null);

                                ?>
                                <label class="form-label" for="label">Price <span class="text-danger">*</span></label>
                                <input required type="number" step=".01" value="{{ $value }}"
                                    class="form-control" id="price" name="price" placeholder="Enter Price">
                                @error('price')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                        </div>

                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $values = old('sizes', $product ? $product->sizes : []);

                                ?>
                                <label class="form-label" for="label">Sizes <span class="text-danger">*</span></label>
                                <select required name="sizes[]" multiple class="form-select">
                                    <option value="">Select Sizes</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size }}"
                                            @if (in_array($size, $values)) selected @endif>{{ $size }}</option>
                                    @endforeach
                                </select>
                                @error('sizes')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">

                                <label class="form-label" for="label">Images <span class="text-danger"></span></label>
                                <input type="file" multiple accept="image/*" class="form-control" id="images"
                                    name="images[]" placeholder="Upload images">
                                @error('images')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-4">

                            {{-- show images --}}

                            @if ($product)
                                @foreach ($product->productImages() as $image)
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <img src="{{ $image->getUrl() }}" alt="" class="img-fluid">
                                    </div>
                                @endforeach
                            @endif

                        </div>



                    </div>



                    <div class="d-flex justify-content-end mb-4">

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
