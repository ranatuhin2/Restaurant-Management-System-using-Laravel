@extends('frontend.layout.master')
@section('content')


<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>

<div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                        @if(isset($first))
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{url('/')}}/upload_file/{{$first->image}}">
                            </div>
                            @endif
                            @if(isset($seccond))
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{url('/')}}/upload_file/{{$seccond->image}}" style="margin-top: 25%;">
                            </div>
                            @endif
                            @if(isset($third))
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{url('/')}}/upload_file/{{$third->image}}">
                            </div>
                            @endif
                            @if(isset($fourth))
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{url('/')}}/upload_file/{{$fourth->image}}">
                            </div>
                            @endif
                        </div>
                    </div>
                    @if(isset($about))

<div class="col-lg-6">
    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
    
    <p class="mb-4">{!! $about->description!!}</p>
    <div class="row g-4 mb-4">
        <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$about->exp}}</h1>
                <div class="ps-4">
                    <p class="mb-0">Years of</p>
                    <h6 class="text-uppercase mb-0">Experience</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$about->chef}}</h1>
                <div class="ps-4">
                    <p class="mb-0">Popular</p>
                    <h6 class="text-uppercase mb-0">Master Chefs</h6>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>


</div>
@endif
</div>
</div>
</div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                @if(isset($team))
                @foreach($team as $data)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{url('/')}}/upload_file/{{$data->image}}" alt="">
                            </div>
                            <h5 class="mb-0">{{$data->name}}</h5>
                            <small>{{$data->designation}}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                    
                </div>
                
            </div>
        </div>
        <!-- Team End -->

@endsection