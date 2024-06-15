@extends('admin.layout.admin_layout')
@section('content')

<div class="container">
      <div class="text-center mb-4">
         <h3>Add Image </h3>
         <p class="text-muted">Complete the form below to update</p>
      </div>

      <div class="container d-flex justify-content-center" >
         <form action="{{route('admin::save_image')}}" enctype="multipart/form-data" method="post" style="width:50vw; min-width:300px;">
         @csrf
            <div >
               <div class="form-group">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control"  name="title" placeholder="Title">
               </div>
            </div>

            <div >
            <div>
               <div class="form-group" >
                  <label class="form-label">Image</label>
                  <input type="file" class="form-control"  name="image">
               </div>
            </div>
            <div class="form-group" >
               <button type="submit"  class="btn btn-success" >Submit</button>
            </div>
         </form>
      </div>
</div>
@endsection
