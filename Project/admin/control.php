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
				$loca_arr=$this->select("location");
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$loc_id=$_REQUEST['loc_id'];
					$address=$_REQUEST['address']; 
					$google=$_REQUEST['google'];
					
					$img=$_FILES['img']['name'];
					
					$data=array("name"=>$name,"loc_id"=>$loc_id,"address"=>$address,"google"=>$google,"img"=>$img);
					
					$res=$this->insert('restaurant',$data);
					if($res)
					{					
						$path="assets/img/restuarant/".$img;
						$tmp_img=$_FILES['img']['tmp_name'];
						move_uploaded_file($tmp_img,$path);
						
						echo "<script>
							alert('Data Add Success');
							window.location='add_shop';
						</script>";
					}
				}
				include_once('add_shop.php');
			break;
			case '/manage_shop':
				$restaurant_arr=$this->select_join2('restaurant','location','restaurant.loc_id=location.id');
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