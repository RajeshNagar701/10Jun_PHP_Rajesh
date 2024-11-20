@extends('website.layout.structure')
@section('main_code')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Edit Profile</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Edit Profile</li>
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
                    <p class="d-inline-block border rounded-pill py-1 px-4">Edit Profile</p>
                    <h1 class="mb-4">Edit Profile Here</h1>

                    <form method="post" enctype="multipart/form-data" action="{{url('/edituser/'.$user->id)}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" value="{{$user->mobile}}" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="name">Your Mobile</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" value="{{$user->email}}" name="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="cid" class="form-control">
                                        <option value="">Select Country</option>
                                        @if(!empty($country))
                                            @foreach($country as $d)
                                                @if($d->id==$user->cid)
                                                <option value="{{$d->id}}" selected>{{$d->cnm}}</option>
                                                @else
                                                <option value="{{$d->id}}">{{$d->cnm}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                    <label for="subject">Country</label>
                                    @error('cid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message">Gender : </label>
                                <?php
                                $gender=$user->gender;
                                ?>
                                Male :<input type="radio" name="gender" value="Male" <?php if($gender=="Male") { echo "checked";}?>>
                                Female :<input type="radio" name="gender" value="Female" <?php if($gender=="Female") { echo "checked";}?>>
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="message">Launguages : </label>

                                <?php
                                $lag=$user->lag;
                                $lag_arr=explode(",",$lag)
                                ?>

                                Hindi :<input type="checkbox" name="lag[]" value="Hindi" <?php if(in_array("Hindi",$lag_arr)){ echo "checked";}?>>
                                English :<input type="checkbox" name="lag[]" value="English" <?php if(in_array("English",$lag_arr)){ echo "checked";}?>>
                                Gujarati :<input type="checkbox" name="lag[]" value="Gujarati" <?php if(in_array("Gujarati",$lag_arr)){ echo "checked";}?>>
                                @error('lag')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="file" name="img" class="form-control" id="img" placeholder="Your Image">
                                    <label for="name">Upload Profile Image</label>
                                    <img src="{{url('website/upload/user/'.$user->img)}}" width="100px" alt="">
                                    @error('img')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Save</button>
                            </div>
                            <div class="col-12 col-sm-12">
                                <a href="/userprofile">Back</a>
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