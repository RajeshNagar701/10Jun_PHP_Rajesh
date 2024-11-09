@extends('admin.layout.structure')
@section('main_code')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>

            </div>

        </div>



        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Manage Contact
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                        <th>#ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @if(!empty($contact))   
                                    @foreach($contact as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->comment}}</td>
                                        <td>{{$d->cid}}</td>
                                        <td>
                                            <a href="deletecontact/<?php echo $d->id?>" class="btn btn-danger">Delete</a>
                                            <a href="" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                 @endif   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
@endsection