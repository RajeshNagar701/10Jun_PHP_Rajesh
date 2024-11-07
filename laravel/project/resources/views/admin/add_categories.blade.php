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

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add Categories
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label>Enter Name</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Enter Message</label>
                                <input class="form-control" type="text" style="min-height:100px;" />
                            </div>

                            <div class="form-group">
                                <label>Attach File </label>
                                <input type="file" />
                            </div>

                            <div class="form-group">
                                <label>For Role </label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />Webmaster
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />Admin
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />Employee
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" />User
                                    </label>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success">Send Message </button>
                            <button type="reset" class="btn btn-primary">Reset Fields</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection