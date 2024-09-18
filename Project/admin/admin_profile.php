
<?php
  include_once('header.php');
  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Profile</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Profile
                        </div>
                        <div class="panel-body">
                           <div class="card" style="width:50%">
							<img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image" style="width:100%">
							<div class="card-body">
							  <h4 class="card-title">Id : <?php echo $fetch->id?></h4>
							  <h4 class="card-title">Email : <?php echo $fetch->admin_email?></h4>
							  <a href="#" class="btn btn-primary">See Profile</a>
							</div>
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