<?php

include_once('model.php'); // 1 step load model page 

 
class control extends model // 2 step extend model 
{
	function __construct()
	{
		
		model::__construct(); // 3 call model contruct so database connectivity
		
		$path=$_SERVER['PATH_INFO'];	
		
		switch($path)
		{
			case '/index':
				include_once('login.php');
			break;
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_shop':
				include_once('add_shop.php');
			break;
			case '/manage_shop':
				$restaurant_arr=$this->select('restaurant');
				include_once('manage_shop.php');
			break;
			case '/add_food':
				include_once('add_food.php');
			break;
			case '/manage_food':
				include_once('manage_food.php');
			break;
			case '/manage_customer':
				$customer_arr=$this->select('customer');
				include_once('manage_customer.php');
			break;
			case '/manage_cart':
				include_once('manage_cart.php');
			break;
			case '/manage_order':
				include_once('manage_order.php');
			break;
			case '/add_emp':
				include_once('add_emp.php');
			break;
			case '/manage_emp':
				include_once('manage_emp.php');
			break;
			
		}
	}
}
$obj=new control

?>