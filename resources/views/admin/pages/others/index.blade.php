@extends('admin.layout.admin_layout')
@section('content')
<div class="content-wrapper" style="min-height: 357px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Online Link</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admin::dashboard')}}">Dashboard</a> </li>
                      <li class="breadcrumb-item active">Online Link</li>
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
                              <a href="{{route('admin::add_team_member')}}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add </a>
                          </h3>

                      </div>
                      <!-- /.card-header -->
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Items DataTables</h3>
              </div>
              @if(session('message'))
              {{session('message')}}
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-success" >
                  <tr>
                        <th>Sl. No</th>
                        <th>Youtube Link</th>
                        <th>Google-map Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(isset($data))
                    @foreach($data as $about)
                    <tr>
                        <td>{{$about->id}}</td>
                        <td>{{$about->ytlink}}</td>
                        <td>{{$about->maplink}}</td>
                       <td>
                        <big>
                        <a href="{{route('admin::link-edit', ['id'=>$about['id']])}}"><i style="color:green" class="fa fa-edit" aria-hidden="true"></i></a>
                      </td><td>
                        <a href="{{route('admin::link-delete', ['id'=>$about['id']])}}"><i onclick="return confirm('Do you want to delete this ?')" style="color:red;" class="fa fa-trash" aria-hidden="true"></i></a>
                        </big>
                        </td>

                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                  <tfoot class="table-success" >
                  <tr>
                  <th>Sl. No</th>
                        <th>Youtube Link</th>
                        <th>Google-map Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
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