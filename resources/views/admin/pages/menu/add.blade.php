@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Add Item</h3>
         <p class="text-muted">Complete the form below to Add Entry</p>
      </div>
        @if(session('message'))
        {{session('message')}}
        @endif
        <div class="container d-flex justify-content-center">
        <form action="{{route('admin::save-menu')}}" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label class="form-label">Items Name</label>
                <input type="text" class="form-control"  name="name" placeholder="Item" >
            </div>
            <!-- <div class="form-group">
                <label class="form-label">Items-Id</label>
                <input type="text" class="form-control" required  name="Item_id" placeholder="Item_id" >
            </div> -->
            <div class="form-group">
                <label class="form-label" >Price</label>
                <input type="text" class="form-control"  name="price" placeholder="Price" >
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <input type="text" class="form-control"  name="description" placeholder="Description" >
            </div>
            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="file"  class="form-control" name="image" required >
            </div>
            <div class="form-group">
                <label class="form-label" >Category</label>
                <input type="text"  class="form-control" name="category" placeholder="Category" required >
            </div>
            
            <div class="from-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
</div>
    </div>
@endsection