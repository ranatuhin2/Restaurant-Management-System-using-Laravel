@extends('admin.layout.admin_layout')
@section('content')

<div class="container">
      <div class="text-center mb-4">
         <h3>Add New Entry</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="{{route('admin::save-bookingdata')}}" method="post" style="width:50vw; min-width:300px;">
         @csrf
               <div class="form-group">
                  <label class="form-label">Your Name</label>
                  <input type="text" required class="form-control" name="name" placeholder="Your Name">
               </div>
               <div class="form-group">
                  <label class="form-label">Your Email</label>
                  <input type="text" required class="form-control" name="email" placeholder="Your Email">
               </div>
           

            
                  <div class="form-group">
                  <label class="form-label">No of People</label>
                  <input type="number" min="1" max="10" required class="form-control" name="people" placeholder="No of People">
               </div>
               <div class="form-group">
                  <label class="form-label">Special Request</label>
                  <input type="text" required class="form-control" name="special_request" placeholder="Special Request">
               </div>
            

            

            <div>
               <button type="submit"  class="btn btn-success" name="submit">Submit</button>
            </div>
         </form>
      </div>
</div>
@endsection