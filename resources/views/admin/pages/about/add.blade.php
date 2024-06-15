@extends('admin.layout.admin_layout')
@section('content')

<div class="container">
      <div class="text-center mb-4">
         <h3>Add New Entry</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="{{route('admin::save_about')}}" method="post" style="width:50vw; min-width:300px;">
         @csrf
               <div class="form-group">
                  <label class="form-label">Title</label>
                  <input type="text" required class="form-control" name="title" placeholder="Title">
               </div>
               <div class="form-group">
                  <label class="form-label">Description</label>
                  <input type="text" required class="form-control" name="description" placeholder="Description">
               </div>
           

            
                  <div class="form-group">
                  <label class="form-label">Experience</label>
                  <input type="text" required class="form-control" name="exp" placeholder="Experience">
               </div>
               <div class="form-group">
                  <label class="form-label">Chef</label>
                  <input type="text" required class="form-control" name="chef" placeholder="Chef">
               </div>
            

            

            <div>
               <button type="submit"  class="btn btn-success" name="submit">Submit</button>
            </div>
         </form>
      </div>
</div>
@endsection
