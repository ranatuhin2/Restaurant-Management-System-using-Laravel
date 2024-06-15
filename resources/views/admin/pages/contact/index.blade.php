@extends('admin.layout.admin_layout')
@section('content')
<div class="content-wrapper" style="min-height: 357px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Contact Table</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admin::dashboard')}}">Dashboard</a> </li>
                      <li class="breadcrumb-item active"><a href="">Contact Table</a></li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@include('admin.layout.message')
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title"></h3>
                          <h3 class="card-title" style="float: right!important;">
                             
                          </h3>

                      </div>
                      <!-- /.card-header -->
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Contacts DataTables</h3>
              </div>
            @if(session('message'))
            {{session('message')}}
            @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-success">
                  <tr>
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(isset($data))
                    @foreach($data as $info)
                    <tr>
                        <td>{{$info->id}}</td>
                        <td>{{$info->name}}</td>
                        <td>{{$info->email}}</td>
                        <td>{{$info->subject}}</td>
                        <td>{{$info->message}}</td>
                        <td>
                        <big>

                        <a href="{{route('admin::delete-contact',['id'=>$info['id']])}}"><i onclick="return confirm('Do you want to delete this ?')" style="color:red;" class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                        </big>

                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                  <tfoot class="table-success" >
                  <tr>
                       
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        </div>
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
    @endsection