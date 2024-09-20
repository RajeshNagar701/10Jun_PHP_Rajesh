<?php


include_once('../admin/model.php'); // 1 step load model page 

 
class control extends model // 2 step extend model 
{
	function __construct()
	{
		session_start();
		
		model::__construct(); // 3 call model contruct so database connectivity
		
		$path=$_SERVER['PATH_INFO'];	
		
		switch($path)
		{
			case '/index':
				include_once('index.php');
			break;
			case '/service':
				include_once('service.php');
			break;
			case '/about':
				include_once('about.php');
			break;
			case '/shop':
				include_once('shop.php');
			break;
			case '/contact':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$mobile=$_REQUEST['mobile']; // pass encrypt
					$email=$_REQUEST['email'];
					$msg=$_REQUEST['msg']; 
					
					$data=array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"msg"=>$msg);
					
					$res=$this->insert('contacts',$data);
					if($res)
					{					
						
						echo "<script>
							alert('Submit Success');
							window.location='contact';
						</script>";
					}
				}
				include_once('contact.php');
			break;
			case '/login':
				if(isset($_REQUEST['login']))
				{
					$user_name=$_REQUEST['user_name'];
					$spass=$_REQUEST['pass'];
					
					$pass=md5($_REQUEST['pass']); // pass encrypt
					
					$where=array("user_name"=>$user_name,"pass"=>$pass);
					
					$res=$this->select_where('customer',$where);
					$ans=$res->num_rows;  // row wise check condtion 
					if($ans==1) // 1 means true
					{
						$fetch=$res->fetch_object();
						if($fetch->status=="Unblock")
						{
							
							if(isset($_REQUEST['rem']))
							{
								setcookie('un_cookie',$user_name,time()+15);
								setcookie('pass_cookie',$spass,time()+15);
							}
							
							//create_session
							$_SESSION['user_id']=$fetch->id;
							$_SESSION['user']=$fetch->user_name;
							
							echo "<script>
								alert('Login Success');
								window.location='index';
							</script>";
						}
						else
						{
							echo "<script>
							alert('Login Failed due to Blocked Account');
							window.location='login';
							</script>";
						}
					}
					else
					{
						echo "<script>
							alert('Login Failed due to wrong credancial');
							window.location='login';
						</script>";
					}
					
					
				}
				include_once('login.php');
			break;
			
			case '/userlogout':
				unset($_SESSION['user_id']);
				unset($_SESSION['user']);
				echo "<script>
				alert('Logout Succes');
				window.location='index';
				</script>";
			break;
			
			case '/user_profile':
				$where=array("id"=>$_SESSION['user_id']);
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				include_once('user_profile.php');
			break;
			
			case '/user_edit':
				if(isset($_REQUEST['user_id']))
				{
					$id=$_REQUEST['user_id'];
					$where=array("id"=>$id);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
				}
				include_once('user_edit.php');
			break;
			
			
			case '/signup':
				
				if(isset($_REQUEST['signup']))
				{
					$user_name=$_REQUEST['user_name'];
					$pass=md5($_REQUEST['pass']); // pass encrypt
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag']; 
					$lag=implode(",",$lag_arr); // convert arr to string
					
					$img=$_FILES['img']['name'];
					
					$data=array("user_name"=>$user_name,"pass"=>$pass,"gender"=>$gender,"lag"=>$lag,"img"=>$img);
					
					$res=$this->insert('customer',$data);
					if($res)
					{					
						$path="images/customer/".$img;
						$tmp_img=$_FILES['img']['tmp_name'];
						move_uploaded_file($tmp_img,$path);
						
						echo "<script>
							alert('Signup Success');
							window.location='signup';
						</script>";
					}
				}
			
				include_once('signup.php');
			break;
			
			default:
				include_once('pnf.php');
			break;
		}
	}
}
$obj=new control

?>