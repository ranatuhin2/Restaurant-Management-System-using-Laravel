@extends('admin.layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title"> Add Banner</h3>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button id="bannerClose" class="btn border-0 p-0"></button>
                    {{ session()->get('success') }}

                </div>
        @endif
        <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('admin::save_banner')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label><span style="color:red;">*</span>
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
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter ...">
                            </div>
                            @if ($errors->has('title'))
                                <span class="alert alert-danger">{{ $errors->first('title') }}</span>
                            @endif


                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="6" cols="50" placeholder="Enter ..."></textarea>
                            </div>
                            @if ($errors->has('description'))
                                <span class="alert alert-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
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
