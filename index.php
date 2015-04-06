<?php
	include('config.php');
	include('core.inc.php');
?>



<!DOCTYPE HTML>
<head>
<title> WT Project</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href="css/logout-button.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img width="150" height="150" src="images/logo.jpg" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    
			    <!-- <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Cart</span>
									<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div> -->
	    
			
<?php
if(isset($_SESSION['userid'])) 
{

?>
 <div style="float:right;"> 
    <ul class="button-group" >
      <a href="profile.php" class="button big primary">Profile</a>
      <a href="logout.php" class="button big primary">Log-Out</a>
    </ul>
  </div>


<?php

}

else 
{

?>
<div style="float:right;"> 
    <ul class="button-group" >
      <a href="login.php" class="button big primary">Log In</a>
      <a href="signup.php" class="button big primary">Sign Up</a>
      
    </ul>
  </div>


<?php

}

?>		 


      

		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
	<div class="menu">
	  <ul id="dc_mega-menu-orange" class="dc_mm-orange">
		 <li><a href="index.php">Home</a></li>
    <li><a href="top-ratings.php">Top Ratings</a>
    
  </li>
  <li><a href="top-reviews.php">Top Reviews</a>
    
  </li>
  <li><a href="services.php">Services</a>
    
  </li>
  <li><a href="about-us.php">About Us</a></li>
   
  
  <li><a href="contact-us.php">Contact Us</a> </li>
  <div class="clear"></div>
</ul>
</div>
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="#"> <img src="images/iphone.png" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Iphone 5S</h2>
						<p>Mobile Phone</p>
						<div class="button"><span><a href="#">Rate it!</a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="#"><img src="images/redmi.jpg" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Redmi Note 4g</h2>
						  <p>Mobile Phone</p>
						  <div class="button"><span><a href="#">Rate it!</a></span></div>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="#"> <img src="images/note4.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Samsung Galaxy Note 4</h2>
						<p>Mobile Phone</p>
						<div class="button"><span><a href="#">Rate it!</a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="#"><img src="images/motog2.jpg" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Motorola Moto G 2</h2>
						  <p>Mobile Phone</p>
						  <div class="button"><span><a href="#">Rate it!</a></span></div>
					</div>
				</div>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	
</div>
 
<br/><br/><br/><br/><br/>

<div class="footer">
	     <div class="section group">
					<center>
						<h4 style="color:white;padding:20px;">COPYRIGHT &copy 2015 Web Technology Project</h4>
						<h4 style="color:white;padding:5px;">Delhi Technological University</h4>
						</center>
				</div>
    </div>	
   
    </div>
    
    <!-- <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a> -->
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>

