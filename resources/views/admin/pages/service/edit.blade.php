@extends('admin.layout.admin_layout')
@section('content')
<div class="container">
    <header class="modal-header">
</header>
<!-- @if(session('message'))
{{(session('message'))}}
@endif -->

<div class="container d-flex justify-content-center">
@if(isset($abouts))
<form action="{{route('admin::service-update')}}" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
<div class="form-group">
  <input type="hidden" class="form-control" name="id" value="{{$abouts->id}}">
  </div>
  @csrf
  <div class="form-group">
      <label class="form-label">Title</label> 
      <input type="text" class="form-control" name="title" value="{{$abouts->title}}"  >
    </div>
  
      <div class="form-group">
      <label class="form-label">Description</label> 
      <input type="text" class="form-control" name="description" value="{{$abouts->description}}">
    </div>
    
    <div class="form-group">
      <label class="form-label">Image</label> 
      <input type="file" class="form-control"  name="image" >
      <br>
      <img src="{{url('/')}}/upload_file/{{$abouts->image}}" height="55px" >
      </div>
    <div class="form-group">
      <button class="btn btn-sm btn-primary">Submit</button>
    </div>

</form>
</div>
@endif
</div>
@endsection