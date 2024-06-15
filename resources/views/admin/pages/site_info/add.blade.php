@extends('admin.layout.admin_layout')
@section('content')
    <div class="content-wrapper" style="min-height: 357px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Site Information</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin::dashboard')}}">Dashboard</a> </li>
                            <li class="breadcrumb-item "><a href="{{route('admin::information')}}">Site Information</a></li>
                            <li class="breadcrumb-item active">@if(empty($siteInfo)) Add @else Edit @endif</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('messages')
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@if(empty($siteInfo)) Add @else Edit @endif</h3>
                            </div>
                            <form action="{{route('admin::information_save')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$siteInfo['id']}}">
                                <div class="card-body">
                                    @if(!empty($siteInfo) && $siteInfo['is_image'] == 'Yes')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Preview Image</label>
                                            <img src="{{$siteInfo['value']}}" style="width: 120px;height: 50px;">
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Key</label>
                                        <input type="text" class="form-control" name="key" id="exampleInputEmail1" placeholder="Enter Key" value="{{$siteInfo['key']}}" @if(!empty($siteInfo)) readonly @endif>
                                    </div>
                                    @if(empty($siteInfo))
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Is Image</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="Yes" onclick="showHide('Yes')">
                                            <label for="customRadio1" class="custom-control-label">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="No" checked onclick="showHide('No')">
                                            <label for="customRadio2" class="custom-control-label">No</label>
                                        </div>
                                    </div>
                                    @endif
                                    @if(!empty($siteInfo) && $siteInfo['is_image'] == 'No')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Value</label>
                                            <input type="text" class="form-control" name="value" id="exampleInputEmail1" @if(!empty($siteInfo) && $siteInfo['is_image'] == 'No') value="{{$siteInfo['value']}}" @endif placeholder="Enter Value">
                                        </div>
                                    @elseif(!empty($siteInfo) && $siteInfo['is_image'] == 'Yes')
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
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
                                    @else
                                        <div class="form-group" id="value_div">
                                            <label for="exampleInputEmail1">Value</label>
                                            <input type="text" class="form-control" name="value" id="exampleInputEmail1" placeholder="Enter Value">
                                        </div>
                                        <div class="form-group" id="image_div" style="display: none">
                                            <label for="exampleInputFile">Image</label>
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
                                    @endif
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    @push('scripts')
        <script>
            /*** Image Value Start ***/
            showHide = (value) => {
                if (value == 'Yes'){
                    document.getElementById('image_div').style.display = 'block';
                    document.getElementById('value_div').style.display = 'none';
                }else {
                    document.getElementById('image_div').style.display = 'none';
                    document.getElementById('value_div').style.display = 'block';
                }
            }
            /*** Image Value End ***/
        </script>
    @endpush
@endsection
