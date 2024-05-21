@extends('layouts.backend-admin')
@section('page-title', 'Users')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Users
                </h3>



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
                                <th>Payment Method</th>
                                <th>Plan</th>
                                <th>Paid At</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($users as $ind => $user)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->payment_method }}</td>
                                    <td>
                                        <a href="{{ route('admin.plans.edit',$user->plan_id) }}">{{ $user->pricingPlan->name }}</a>
                                    </td>
                                    <td>{{ $user->first_payment_at }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
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
