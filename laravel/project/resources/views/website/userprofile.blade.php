@extends('website.layout.structure')
@section('main_code')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Profile</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Feature Start -->
<div class="container-fluid bg-primary overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <p class="d-inline-block border rounded-pill text-light py-1 px-4">Profile</p>
                    <h1 class="text-white mb-4">MANAGE USER PROFILE</h1>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-user-md text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Id : {{$user->id}}</p>
                                    <h5 class="text-white mb-0">Name : {{$user->name}}</h5>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-comment-medical text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Gender : {{$user->gender}}</p>
                                    <p class="text-white mb-2">Mobile : {{$user->mobile}}</p>
                                    <h5 class="text-white mb-0">Launguges : {{$user->lag}}</h5>
                                </div>
                                <div class="ms-4">
                                    <a href="edituser/<?php echo $user->id;?>" class="btn btn-dark">Edit</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{url('website/upload/user/'.$user->img)}}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
@endsection