@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Edit Image</h3>
         <p class="text-muted">Complete the form below to update</p>
      </div>
        <div class="container d-flex justify-content-center">
        @if(isset($data))
        <form action="{{route('admin::image_update')}}" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" >
        @csrf
            <div><input type="hidden" name="id" value="{{$data->id}}"></div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" value="{{$data->title}}"  name="title" placeholder="Title" >
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file"  class="form-control" name="image" > <br>
                <img src="{{url('/')}}/upload_file/{{$data->image}}" height="55px">
            </div>
            
            <div class="form-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
        @endif
</div>
    </div>

@endsection