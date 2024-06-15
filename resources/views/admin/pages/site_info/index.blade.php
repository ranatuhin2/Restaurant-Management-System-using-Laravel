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
                            <li class="breadcrumb-item active">Site Information</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Site Information</h3>
                                {{--<h3 class="card-title" style="float: right!important;">
                                    <a href="{{route('admin::information_add')}}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
                                </h3>--}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Image</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($siteInfo))
                                        @foreach($siteInfo as $site)
                                            <tr>
                                                <td>{{$site['key']}}</td>
                                                <td>
                                                    @if($site['is_image'] == 'Yes')
                                                        <img src="{{$site['value']}}" style="width: 120px;height: 50px;">
                                                    @else
                                                        <span>N/A</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($site['is_image'] == 'Yes')
                                                        <span>N/A</span>
                                                    @else
                                                        {{$site['value']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('admin::information_edit',['id'=>$site['id']])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Key</th>
                                        <th>Image</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @push('scripts')

    @endpush
@endsection
