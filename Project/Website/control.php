<?php

class control
{
	function __construct()
	{
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
				include_once('contact.php');
			break;
			case '/login':
				include_once('login.php');
			break;
			case '/signup':
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