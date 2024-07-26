<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Service</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <?php
		include_once('header.php');
	  ?>
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <?php
				  include_once('navbar.php');
			    ?>
            </div>
            <!-- banner section end -->
            <!-- service section start -->
            <div class="service_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="service_taital">Quick Searches</h1>
                     </div>
                  </div>
                  <div class="service_section_2">
                     <div class="row">
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/breakfast-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Breakfast</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/delivery-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Delivery</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/dinner-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Dinner</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/coffee-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Coffee</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/alcohol-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Alcohol</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/diningtable-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Diningtable</h4>
                           <div class="seemore_bt"><a href="#">See More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- service section end -->
            <!-- footer section start -->
            <?php
			include_once('footer.php');
			?>
            <!-- footer section end -->
         </div>
      </div>
      <!-- layout main section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>