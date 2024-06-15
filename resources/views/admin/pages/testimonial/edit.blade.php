@extends('admin.layout.admin_layout')
@section('content')

<div class="container">
        <div class="text-center mb-4">
         <h3>Edit Entry </h3>
         <p class="text-muted">Complete the form below to update</p>
      </div>
    @if(isset($data))
    <form action="{{route('admin::update-review')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{$data->id}}">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{$data->title}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{$data->description}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" ><br>
            <img src="{{url('/')}}/upload_file/{{$data->image}}" height="55px">
        </div>
        
        <button class="btn btn-sm btn-primary">submit</button>
    </form>
    @endif
</div>
 @endsection