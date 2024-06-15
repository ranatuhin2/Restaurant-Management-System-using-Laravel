@extends('admin.layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title"> Add Team Member</h3>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button id="bannerClose" class="btn border-0 p-0"></button>
                    {{ session()->get('success') }}

                </div>
        @endif
        <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('admin::save_team_member')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <span style="color:red;">*</span>
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

                            @if ($errors->has('image'))
                                <span class="alert alert-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="name" class="form-control" placeholder="Enter ...">
                            </div>
                            @if ($errors->has('name'))
                                <span class="alert alert-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Job Position</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="position" class="form-control" placeholder="Enter ...">
                            </div>
                            @if ($errors->has('position'))
                                <span class="alert alert-danger">{{ $errors->first('position') }}</span>
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
{{--                                <label>Linkedin</label>--}}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-linkedin"></i></span>
                                    </div>
                                    <input type="text" name="linkedin" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                            @if ($errors->has('linkedin'))
                                <span class="alert alert-danger">{{ $errors->first('linkedin') }}</span>
                            @endif
                        </div>
                    </div>
                    <br>
            <!-- input states -->

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group" style="text-align:center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
            </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
