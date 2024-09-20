
<?php
  include_once('header.php');
  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Shop</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Shop
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
											<th>Profile</th>
                                            <th>Shop Name</th>
                                            <th>Address</th>
                                            <th>Location</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									foreach($restaurant_arr as $data)
									{
									?>
                                        <tr>
                                            <td><?php echo $data->id; ?></td>
											<td><a href="<?php echo $data->google;?>"><img src="assets/img/restuarant/<?php echo $data->img?>" width="50px"/></a></td>
                                            <td><?php echo $data->name; ?></td>
                                            <td><?php echo $data->address; ?></td>
                                            <td><?php echo $data->loc_name; ?></td>
											<td>
												<a href="shop_edit?shop_id=<?php echo $data->id; ?>" class="btn btn-primary">Edit</a>
												<a href="delete?del_shop=<?php echo $data->id; ?>" class="btn btn-danger" > Delete</a>
												<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                    <?php
									}
									?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
              
            </div>
                <!-- /. ROW  -->
           
 

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   
<?php
  include_once('footer.php');
  ?>