<?php
	include('config.php');
		include('core.inc.php');
?>



<!DOCTYPE HTML>
<head>
<title> WT Project</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/nav-hover.js"></script>
<script type="text/javascript" src="js/ratings-js.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href="css/logout-button.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/rating-style.css" rel="stylesheet" type="text/css" media="all"/>

	<style type="text/css">
        .rate_widget {
            border:     1px solid black;
            overflow:   visible;
            padding:    10px;
            position:   relative;
            width:      180px;
            height:     32px;
            padding: 10px;
            margin: 10px;
        }
        .ratings_stars {
            background: url('star_empty.png') no-repeat;
            float:      left;
            height:     28px;
            padding:    2px;
            width:      32px;
        }
        .ratings_vote {
            background: url('star_full.png') no-repeat;
        }
        .ratings_over {
            background: url('star_highlight.png') no-repeat;
        }
        .total_votes {
            background: #eaeaea;
            top: 58px;
            left: 0;
            padding: 5px;
            position:   absolute;  
        } 
        .cellphone_choice {
            font: 10px verdana, sans-serif;
            margin: 0 auto 40px auto;
            width: 180px;
        }
        
    </style>

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
	
<br/><br/><br/><br/><br/>


<div id="rating_outer_wrapper">

	<div class="rating_inner_wrapper">
		<div class="cell-name-text">
			IPHONE 5S
		</div>

		<div>
			<img src="images/iphone.png">
		</div>

		<div>
			<div class="cellphone_choice">
			    
			    <div id="r1" class="rate_widget">
			        <div class="star_1 ratings_stars"></div>
			        <div class="star_2 ratings_stars"></div>
			        <div class="star_3 ratings_stars"></div>
			        <div class="star_4 ratings_stars"></div>
			        <div class="star_5 ratings_stars"></div>
			        
			    </div>
			</div>
		</div>



	</div>

	<div class="rating_inner_wrapper">
		<div class="cell-name-text">
			REDMI NOTE 4G
		</div>

		<div>
			<img src="images/redmi.jpg">
		</div>

		<div>
			<div class="cellphone_choice">
			    
			    <div id="r1" class="rate_widget">
			        <div class="star_1 ratings_stars"></div>
			        <div class="star_2 ratings_stars"></div>
			        <div class="star_3 ratings_stars"></div>
			        <div class="star_4 ratings_stars"></div>
			        <div class="star_5 ratings_stars"></div>
			        
			    </div>
			</div>
		</div>
	</div>

	<div class="rating_inner_wrapper">
		<div class="cell-name-text">
			SAMSUNG GALAXY NOTE 4
		</div>

		<div>
			<img src="images/note4.jpg">
		</div>

		<div>
			<div class="cellphone_choice">
			    
			    <div id="r1" class="rate_widget">
			        <div class="star_1 ratings_stars"></div>
			        <div class="star_2 ratings_stars"></div>
			        <div class="star_3 ratings_stars"></div>
			        <div class="star_4 ratings_stars"></div>
			        <div class="star_5 ratings_stars"></div>
			        
			    </div>
			</div>
		</div>
	</div>

	<div class="rating_inner_wrapper">
		<div class="cell-name-text">
			MOTOROLA MOTO G 2
		</div>

		<div>
			<img src="images/motog2.jpg">
		</div>

		<div>
			<div class="cellphone_choice">
			    
			    <div id="r1" class="rate_widget">
			        <div class="star_1 ratings_stars"></div>
			        <div class="star_2 ratings_stars"></div>
			        <div class="star_3 ratings_stars"></div>
			        <div class="star_4 ratings_stars"></div>
			        <div class="star_5 ratings_stars"></div>
			        
			    </div>
			</div>
		</div>
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

