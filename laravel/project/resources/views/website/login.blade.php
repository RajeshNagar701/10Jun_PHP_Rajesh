@extends('website.layout.structure')
@section('main_code')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Login Here</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Login Here
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Login Us</p>
                    <h1 class="mb-4">Login Here</h1>
                    <form action="{{url('/auth_login')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="col-12 col-sm-12">
                                <input type="email" value="{{old('email')}}" name="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <input type="password"  value="{{old('password')}}" name="password" class="form-control border-0" placeholder="Your Password" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                            </div>
                            <div class="col-12 col-sm-12">
                                <a href="signup">If not regisrtered then Signup Here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
@endsection