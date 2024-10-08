
<?php
if(isset($_SESSION['admin']))
  {
	  
  }	  
  else
  {
	  echo "<script>
			alert('Login First');
			window.location='admin';
		</script>";
  }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="admin_profile" class="btn btn-primary"><b></b><i class="fa fa-user fa-2x"></i></a>
                <a href="admin_logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
								<?php
								echo $_SESSION['admin'];
								?>	
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                   
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i> Shop <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_shop"><i class="fa fa-coffee"></i>Add Shop</a>
                            </li>
                            <li>
                                <a href="manage_shop"><i class="fa fa-flash "></i>Manage Shop</a>
                            </li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-yelp "></i> Food Item <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_food"><i class="fa fa-coffee"></i>Add Food</a>
                            </li>
                            <li>
                                <a href="manage_food"><i class="fa fa-flash "></i>Manage Food</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="manage_cart"><i class="fa fa-flash "></i>Cart Item </a>
                        
                    </li>
					<li>
                        <a href="manage_order"><i class="fa fa-flash "></i>Order</a>  
                    </li>
					<li>
                        <a href="manage_customer"><i class="fa fa-flash "></i>Customer</a>  
                    </li>
					<li>
                        <a href="manage_order"><i class="fa fa-flash "></i>Order</a>  
                    </li>
					<li>
                        <a href="#"><i class="fa fa-yelp "></i> Employee <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_emp"><i class="fa fa-coffee"></i>Add Employee</a>
                            </li>
                            <li>
                                <a href="manage_emp"><i class="fa fa-flash "></i>Manage Employee</a>
                            </li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="manage_feedback"><i class="fa fa-flash "></i>Feedback</a>  
                    </li>
					<li>
                        <a href="manage_contact"><i class="fa fa-flash "></i>Contact</a>  
                    </li>	
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->