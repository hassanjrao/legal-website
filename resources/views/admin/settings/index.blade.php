@extends('layouts.backend')

@section('page-title', 'Settings')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title"> Settings</h3>


            </div>
            <div class="block-content">
                <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row push justify-content-center">

                        <div class="col-lg-12 ">

                            <div class="row mb-4">
                                <div class="col-3">
                                    <img src="{{ $setting->logo_url }}" alt="" class="img-fluid">
                                    <label class="form-label" for="label">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </div>
                                <div class="col-3">
                                    <img src="{{ $setting->favicon_url }}" alt="" class="img-fluid">
                                    <label class="form-label" for="label">Favicon</label>
                                    <input type="file" class="form-control" id="favicon" name="favicon">
                                </div>


                            </div>

                            <br>
                            <div class="row mb-4">
                                <div class="col-3">
                                    <label class="form-label" for="label">Mail Mailer</label>
                                    <input type="text" class="form-control" id="Mail Mailer" name="mail_mailer" value="{{ $setting->mail_mailer }}">
                                </div>

                                <div class="col-3">
                                    <label class="form-label" for="label">Mail Host</label>
                                    <input type="text" class="form-control" id="mail_host" name="mail_host" value="{{ $setting->mail_host }}">
                                </div>


                                <div class="col-3">
                                    <label class="form-label" for="label">Mail Port</label>
                                    <input type="text" class="form-control" id="mail_port" name="mail_port" value="{{ $setting->mail_port }}">
                                </div>

                                <div class="col-3">
                                    <label class="form-label" for="label">Mail Username</label>
                                    <input type="text" class="form-control" id="mail_username" name="mail_username" value="{{ $setting->mail_username }}">
                                </div>

                                <div class="col-3">
                                    <label class="form-label" for="label">Mail Password</label>
                                    <input type="text" class="form-control" id="mail_password" name="mail_password" value="{{ $setting->mail_password }}">
                                </div>





                            </div>




                        </div>



                    </div>

                    <div class="d-flex justify-content-end mb-4">

                        <button type="submit" class="btn btn-primary  border">Update</button>

                    </div>




                </form>
            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection


