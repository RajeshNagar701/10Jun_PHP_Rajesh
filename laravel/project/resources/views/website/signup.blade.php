@extends('website.layout.structure')
@section('main_code')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Signup</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Signup</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Signup Us</p>
                    <h1 class="mb-4">Signup Here</h1>

                    <form method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Your Password">
                                    <label for="name">Your Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="cid" class="form-control">
                                        <option>Select Country</option>
                                    </select>
                                    <label for="subject">Country</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message">Gender : </label>
                                Male :<input type="radio" name="gen" value="Male">
                                Female :<input type="radio" name="gen" value="Female">
                            </div>
                            <div class="col-12">
                                <label for="message">Launguages : </label>
                                Hindi :<input type="checkbox" name="lag[]" value="Hindi">
                                English :<input type="checkbox" name="lag[]" value="English">
                                Gujarati :<input type="checkbox" name="lag[]" value="Gujarati">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Signup</button>
                            </div>
                            <div class="col-12 col-sm-12">
                                <a href="login">If already regisrtered then Login Here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection