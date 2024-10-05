
<?php

include_once('model.php'); // step 1


class control extends model   // step 2
{
	function __construct()
	{
		
		session_start();
		
		model::__construct();   // step 3
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/28Dec_PHP_2023/Project/website/control.php
		
		switch($url)
		{
			case '/contact_get':	
				$res=$this->select('contacts');
				if($res)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Contact Found.", "status" => false));
				}
			break;
			
			case '/contact_single_get':	
				
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$chk=$this->select_where('contacts',$where);
				$res=$chk->fetch_object();
				if($res)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Contact Found.", "status" => false));
				}
			break;
			
			case '/contact_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$name = $data_arr["name"]; 
				$email = $data_arr["email"];
				$mobile = $data_arr["mobile"];
				$comment = $data_arr["comment"];
				
				$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"comment"=>$comment);
				
				$res=$this->insert('contacts',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Contacts Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Failed Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/contact_delete':	
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('contacts',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "Contacts Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Contacts Not Deleted", "status" => false));	
				}
			break;
			
			case '/contact_patch':	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data_arr["id"];
				$name = $data_arr["name"]; 
				$email = $data_arr["email"];
				$mobile = $data_arr["mobile"];
				$comment = $data_arr["comment"];
				
				$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"comment"=>$comment);
				$where=array("id"=>$id);
				
				$res=$this->update_where('contacts',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Contacts Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Contacts Not Update", "status" => false));	
				}
			break;
			
			
			case '/login_user':	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$email = $data_arr["email"];
				$password = $data_arr["password"];
				
				$where=array("email"=>$email,"password"=>$password);
				
				$res=$this->select_where('user',$where);
				
				$fetch=$res->fetch_object();
				
				$chk=$res->num_rows;
				if($chk==1)
				{	
					if($fetch->status=="Unblock")
					{
						echo json_encode(array("message" => "Login Successfully", "status" => true));	
					}
					else
					{
						echo json_encode(array("message" => "Login Failed due Blocked Account", "status" => false));	
					}
				}
				else
				{	
					echo json_encode(array("message" => "Login Failed due to wrong credencial", "status" => false));	
				}
			break;
			
			
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>