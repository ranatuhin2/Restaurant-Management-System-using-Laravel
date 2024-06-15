@extends('frontend.layout.master')
@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <div class="text-center">
            <h4 class="text-black mb-4">
                @if(session('message'))
                {{session('message')}}
                @endif
            </h4>
        </div>
        <div class="row g-0">
        <div class="col-md-5">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
               <div class="col-md-7 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    
                        <h1 class="text-white mb-4">IT'S TIME FOR YOUR REVIEW!!</h1>
                        <form action="{{url('/save-review')}}" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                        @csrf
                            <div class="row g-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="title" placeholder="Your Title">
                                        <label for="title">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating">
                                      <input type="file" class="form-control" name="image" placeholder="Your Image">
                                        <label for="image">Imgae</label>
                                    </div>
                                </div> 
                                <div class="col-md-11">
                                    <div class="form-floating">
                                    <textarea class="form-control" name="description" placeholder="description" style="height: 100px"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div> 
                                
                                
                                <div class="col-11">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
        </div>
@endsection