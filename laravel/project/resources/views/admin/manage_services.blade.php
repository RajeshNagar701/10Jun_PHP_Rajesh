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
                        Manage Services
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                        <th>#ID</th>
                                        <th>Cate Id</th>
                                        <th>Service Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @if(!empty($service))   
                                    @foreach($service as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->cate_id}}</td>
                                        <td>{{$d->ser_name}}</td>
                                        <td>{{$d->price}}</td>
                                        <td>{{$d->ser_img}}</td>
                                        <td>{{$d->description}}</td>
                                        <td>
                                            <a href="" class="btn btn-danger">Delete</a>
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