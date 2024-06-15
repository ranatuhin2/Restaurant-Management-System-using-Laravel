@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Add Team  </h3>
         <p class="text-muted">Complete the form below to Add</p>
      </div>
        @if(session('message'))
        {{session('message')}}
        @endif
        <div class="container d-flex justify-content-center">
        <form action="{{route('admin::save-team')}}" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" >
        @csrf
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control"  name="name" placeholder="Name" >
            </div>
            <div class="form-group">
                <label class="form-label">Designation</label>
                <input type="text" class="form-control"  name="designation" placeholder="Designation" >
            </div>
            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="file"  class="form-control" name="image" required >
            </div>
            
            <div class="from-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
</div>
    </div>
@endsection