<div class="container-fluid">
	 <div class="header_section">
		<div class="container">
		   <nav class="navbar navbar-light bg-light justify-content-between">
			  <div id="mySidenav" class="sidenav">
				 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				 <a href="/">Home</a>
				 <a href="service">Services</a>
				 <a href="about">About</a>
				 <a href="shop">Shop</a>
				 <a href="contacts">Contacts</a>
			  </div>
			  <form class="form-inline ">
				 <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +091 9722041171</span></a></div>
			  </form>
			  <a class="logo" href="/"><img src="images/logo.png"></a></a>
			  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
			  <?php
			  if(isset($_SESSION['user_id']))
			  {
			  ?>
			  <div class="login_text"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="padding_left10">Hi .. <?php echo $_SESSION['user']?></span></a></div>
			  <?php
			  }
			  ?>
		   </nav>
		</div>
	 </div>
  </div>