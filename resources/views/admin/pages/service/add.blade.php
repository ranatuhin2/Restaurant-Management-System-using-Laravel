@extends('admin.layout.admin_layout')
@section('content')
<div class="container">
<div class="text-center mb-4">
         <h3>Add Entry </h3>
         <p class="text-muted">Complete the form below to Add</p>
      </div>
<div class="container d-flex justify-content-center">
@if(session('message'))
{{(session('message'))}}
@endif

<form action="{{route('admin::save-service')}}" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" >
  @csrf
  <div class="form-group">
      <label class="form-label">Title</label> 
      <input type="text" class="form-control" name="title" placeholder="Title" >
    </div>
  
      <div class="form-group">
      <label class="form-label">Description</label> 
      <input type="text" class="form-control" name="description" placeholder="Description">
    </div>
    
    <div class="form-group">
      <label class="form-label">Image</label> 
      <input type="file" class="form-control" name="image" required>
      </div>
    <div class="form-group">
      <button class="btn btn-sm btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
@endsection