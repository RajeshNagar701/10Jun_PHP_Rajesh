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
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

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
                                Jhon Deo Alex
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
                                <a href="add_shop.php"><i class="fa fa-coffee"></i>Add Shop</a>
                            </li>
                            <li>
                                <a href="manage_shop.php"><i class="fa fa-flash "></i>Manage Shop</a>
                            </li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-yelp "></i> Food Item <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_food.php"><i class="fa fa-coffee"></i>Add Food</a>
                            </li>
                            <li>
                                <a href="manage_food.php"><i class="fa fa-flash "></i>Manage Food</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="manage_cart.php"><i class="fa fa-flash "></i>Cart Item </a>
                        
                    </li>
					<li>
                        <a href="manage_order.php"><i class="fa fa-flash "></i>Order</a>  
                    </li>
					<li>
                        <a href="manage_customer.php"><i class="fa fa-flash "></i>Customer</a>  
                    </li>
					<li>
                        <a href="manage_order.php"><i class="fa fa-flash "></i>Order</a>  
                    </li>
					<li>
                        <a href="#"><i class="fa fa-yelp "></i> Employee <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_emp.php"><i class="fa fa-coffee"></i>Add Employee</a>
                            </li>
                            <li>
                                <a href="manage_emp.php"><i class="fa fa-flash "></i>Manage Employee</a>
                            </li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="manage_feedback.php"><i class="fa fa-flash "></i>Feedback</a>  
                    </li>
					<li>
                        <a href="manage_contact.php"><i class="fa fa-flash "></i>Contact</a>  
                    </li>	
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->