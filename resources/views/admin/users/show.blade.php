@extends('layouts.backend-admin')

@section('page-title',   'User')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $user->name }} user</h3>


                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">All Users</a>


            </div>
            <div class="block-content">



                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('name', $user ? $user->name : null);
                                ?>
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input required readonly type="text" value="{{ $value }}" class="form-control"
                                    id="name" name="name" placeholder="Enter name">
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('email', $user ? $user->email : null);
                                ?>
                                <label class="form-label" for="label">Email <span class="text-danger">*</span></label>
                                <input required readonly type="text" step=".01" value="{{ $value }}" class="form-control"
                                    id="email" name="email" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('payment_method', $user ? $user->payment_method : null);

                                ?>
                                <label class="form-label" for="label">Payment Method <span class="text-danger">*</span></label>
                                <input required readonly type="text"  value="{{ $value }}" class="form-control"
                                    id="payment_method" name="payment_method" >
                                @error('payment_method')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('plan_id', $user ? $user->pricingPlan->name : null);

                                ?>
                                <label class="form-label" for="label">Plan <span class="text-danger">*</span></label>
                                <input required readonly type="text"  value="{{ $value }}" class="form-control"
                                    id="plan_id" name="plan_id" >
                                @error('plan_id')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('phone', $user ? $user->phone : null);

                                ?>
                                <label class="form-label" for="label">Phone <span class="text-danger">*</span></label>
                                <input required readonly type="text"  value="{{ $value }}" class="form-control"
                                    id="phone" name="phone" >
                                @error('phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('country', $user ? $user->country : null);

                                ?>
                                <label class="form-label" for="label">Country <span class="text-danger">*</span></label>
                                <input required readonly type="text"  value="{{ $value }}" class="form-control"
                                    id="country" name="country" >
                                @error('country')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <?php
                                $value = old('first_payment_at', $user ? $user->first_payment_at : null);

                                ?>
                                <label class="form-label" for="label">Paid At <span class="text-danger">*</span></label>
                                <input required readonly type="text"  value="{{ $value }}" class="form-control"
                                    id="first_payment_at" name="first_payment_at" >
                                @error('first_payment_at')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>





                    </div>


                </div>





            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')



@endsection
