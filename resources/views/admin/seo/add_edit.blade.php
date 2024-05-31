@extends('layouts.backend')


@section('page-title',  ' SEO')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">SEO</h3>

            </div>
            <div class="block-content">


                <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page</th>
                                <th>Title</th>
                                <th width='600px'>Meta Tags (Any Tags inside Head)</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pages as $ind => $page)
                                <tr>
                                    <form action="{{ route('admin.seo.update', $page->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="page" value="{{ $page->id }}">
                                        <td>{{ $ind + 1 }}</td>
                                        <td>
                                            <input type="text" class="form-control" value="{{ $page->name }}" readonly>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title" value="{{ $page->title }}">
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="meta_tags" rows="3">{{ $page->meta_tags }}</textarea>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Update</button>

                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>







            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
