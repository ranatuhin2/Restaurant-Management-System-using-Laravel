@extends('admin.layout.admin_layout')
@section('content')
    <style>
        .card-footer{
            text-align: end;
        }
    </style>
    <div class="content-wrapper" style="min-height: 1342.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin::dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Password</a>

                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            @include('messages')
                            <div class="tab-pane fade show active" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                <form action="{{route('admin::profile_update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Preview Image</label>
{{--                                            <img src="{{$user['profile_picture']}}" alt="No Profile Picture Found" style="width: 150px;height: 150px;object-fit: cover;">--}}
                                            <img src="{{asset('upload/images/profile/'.$user['profile_picture'])}}" alt="No Profile Picture Found" style="width: 150px;height: 150px;object-fit: cover;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" value="{{$user['name']}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="{{$user['email']}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone" value="{{$user['phone']}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                                <form action="{{route('admin::password_update')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Old Password</label>
                                            <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" placeholder="Enter Old Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" class="form-control" name="new_password" id="exampleInputEmail1" placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            window.onload = passwordTab();
            function passwordTab() {
                var session = '<?php echo json_encode($session) ?>';
                var data = JSON.parse(session);
                if (data.password_error != null || data.password_success != null){
                    $("#vert-tabs-messages-tab").addClass('active');
                    $("#vert-tabs-profile-tab").removeClass('active');
                    $("#vert-tabs-messages").addClass('show');
                    $("#vert-tabs-profile").removeClass('show');
                    $("#vert-tabs-messages").addClass('active');
                    $("#vert-tabs-profile").removeClass('active');
                }
            }
        </script>
    @endpush
@endsection
