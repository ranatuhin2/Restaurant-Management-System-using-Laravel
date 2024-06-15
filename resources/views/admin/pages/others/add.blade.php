@extends('admin.layout.admin_layout')
@section('content')
    <div class="container">
    <div class="text-center mb-4">
         <h3>Add Link</h3>
         <p class="text-muted">Complete the form below to Add Entry</p>
      </div>
        @if(session('message'))
        {{session('message')}}
        @endif
        <div class="container d-flex justify-content-center">
        <form action="{{route('admin::link-save')}}" method="post" style="width:50vw; min-width:300px;">
        @csrf
            
            <div class="form-group">
                <label class="form-label" >Youtube Link</label>
                <input type="text" class="form-control"  name="linky" placeholder="Youtube Link" >
            </div>
            <div class="form-group">
                <label class="form-label">Google-map Link</label>
                <input type="text" class="form-control"  name="linkm" placeholder="Google-map Link" >
            </div>
            
            <div class="from-group">
                <button class="btn btn-sm btn-primary" >Submit</button>
            </div>
        </form>
</div>
    </div>
@endsection