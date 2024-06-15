@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Edit Menu</h3>
         <p class="text-muted">Complete the form below to update</p>
      </div>
       @if(isset($data))
       <div class="container d-flex justify-content-center">
        <form action="{{route('admin::update-team')}}" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" >
        @csrf
            <div class="form-group">
                
                <input type="hidden" class="form-control"  name="id" value="{{$data->id}}" >
            </div>
            <div class="form-group">
                <label class="form-label" >Items Name</label>
                <input type="text" class="form-control"  name="name"  value="{{$data->Items}}" >
            </div>
            <div class="form-group">
                
                <input type="hidden" class="form-control"  name="Item_id" value="{{$data->Item_id}}" >
            </div>
            <div class="form-group">
                <label class="form-label" >Price</label>
                <input type="text" class="form-control"  name="price"  value="{{$data->price}}" >
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control"  name="description"  value="{{$data->description}}" >
            </div>
            <div class="form-group">
                <label class="form-label" >Image</label>
                <input type="file"  class="form-control" name="image"  ><br>
                <img src="{{url('/')}}/upload_file/{{$data->image}}" height="55px">
            </div>
            <div class="form-group">
                <label class="form-label">Category</label>
                <input type="text"  class="form-control" name="category" value="{{$data->category}}" >
            </div>
            <div class="from-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
</div>
        @endif
    </div>
@endsection