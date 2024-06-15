@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Edit Team  </h3>
         <p class="text-muted">Complete the form below to Update</p>
      </div>
        @if(session('message'))
        {{session('message')}}
        @endif
        @if(isset($data))
        <div class="container d-flex justify-content-center">
        <form action="{{route('admin::team-update')}}" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" >
        @csrf
            <div> <input type="hidden" name="id" value="{{$data['id']}}" > </div>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="{{$data['name']}}" name="name" placeholder="Name" >
            </div>
            <div class="form-group">
                <label class="form-label">Designation</label>
                <input type="text" class="form-control" value="{{$data['designation']}}"  name="designation" placeholder="Designation" >
            </div>
            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="file"  class="form-control"  name="image" >
            </div>
            <div class="form-group">
               <img src="{{url('/')}}/upload_file/{{$data['image']}}" height="55px">
            </div>
            
            <div class="from-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
</div>
@endif
    </div>
@endsection