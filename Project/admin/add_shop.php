
<?php
  
  include_once('header.php');
  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Shop</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Shop
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input name="name" class="form-control" type="text">
                                        </div>
										<div class="form-group">
                                            <label>Upload Image</label>
                                            <input name="img" class="form-control" type="file">
                                        </div>
										<div class="form-group">
                                            <label>Select Example</label>
                                            <select name="loc_id" class="form-control">
												<option>Select City</option>
											<?php
											foreach($loca_arr as $w)
											{
											?>
                                                <option value="<?php echo $w->id?>"><?php echo $w->loc_name?></option>
											<?php
											}
											?>	
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" class="form-control"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Google url</label>
                                            <input name="google" class="form-control" type="url"/ ></input>
                                        </div>
                                        <button type="submit"  name="submit" class="btn btn-info">Submit</button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   <?php
  include_once('footer.php');
  ?>