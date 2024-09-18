
<?php

function active($currect_page){
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
	  $url = end($url_array);  
	  if($currect_page == $url){
		  echo 'active'; //class name in css 
	  } 
	}
?>

<div class="container">
  <div class="menu_main">
	 <div class="custome_menu">
		<ul>
		   <li class="<?php active("index")?>"><a href="index">Home</a></li>
		   <li class="<?php active("service")?>"><a href="service">Services</a></li>
		   <li class="<?php active("about")?>"><a href="about">About</a></li>
		   <li class="<?php active("shop")?>"><a href="shop">Shop</a></li>
		   <li class="<?php active("contact")?>"><a href="contact">Contacts</a></li>
		    <?php
			  if(isset($_SESSION['user_id']))
			  {
			  ?>
			    <li class="<?php active("user_profile")?>"><a href="user_profile">Account</a></li>
			  <?php
			  }
			  ?>
		</ul>
	 </div>
	 <div class="login_menu">
		<ul>
		 <?php
		  if(isset($_SESSION['user_id']))
		  {
		  ?>
		   <li><a href="userlogout">Logout </a></li> 
		  <?php
		  }
		  else
		  {  
		  ?>
			<li><a href="login">Login</a></li>
		  <?php
		  }
		  ?>
		</ul>
	 </div>
  </div>
</div>