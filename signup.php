<?php
	include('config.php');
		include('core.inc.php');
?>


<?php

if(isset($_POST['user_name'], $_POST['user_email'], $_POST['user_password'], $_POST['user_bio']) )
{
	
	
	if($_POST['user_password']==$_POST['password_again'])
	{
	
		if(strlen($_POST['user_password'])>=6)
		{
	
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['user_email']))
			{
	
				$username = mysql_real_escape_string($_POST['user_name']);
				$password = mysql_real_escape_string($_POST['user_password']);
				$formPassword=md5($password);
				$email = mysql_real_escape_string($_POST['user_email']);
				$user_bio = mysql_real_escape_string($_POST['user_bio']);
				$dn = mysql_num_rows(mysql_query('select id from users where email="'.$email.'"'));
				if($dn==0)
				{
	
					$dn2 = mysql_num_rows(mysql_query('select id from users'));
					$id = $dn2+1;

					if(mysql_query('insert into users(id, name, email, password, about) values ('.$id.', "'.$username.'", "'.$email.'", "'.$formPassword.'", "'.$user_bio.'")'))
					{

						$form = false;
						$current_dir = getcwd();
												
																							
												
?>
<div class="message">You have been registered successfully. You can now log in.<br />
<script type="text/javascript">
	alert("registered Successfully !");
</script>


</div>



<?php
					}
					else
					{
						//Otherwise, we say that an error occured
						$form = true;
						$message = 'An error occurred while signing up.';
					}
				}
				else
				{
					//Otherwise, we say the username is not available
					$form = true;
					$message = 'The email you want to use is not available, please choose another one.';
				}
			}
			else
			{
				//Otherwise, we say the email is not valid
				$form = true;
				$message = 'The email you entered is not valid.';
			}
		}
		else
		{
			//Otherwise, we say the password is too short
			$form = true;
			$message = 'Your password must contain at least 6 characters.';
		}
	}
	else
	{
		//Otherwise, we say the passwords are not identical
		$form = true;
		$message = 'The passwords you entered are not identical.';
	}
}


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
<link href="css/login-style.css" rel='stylesheet' type='text/css'>
<link href="css/signup-style.css" rel='stylesheet' type='text/css'>
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
	
</div>

<br/><br/><br/><br/><br/>

	<?php
if(isset($_SESSION['userid'])) 
{

header('Location: index.php');

}

else 
{

?>

	<form action="signup.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          <label for="password">Re-enter Password:</label>
          <input type="password" id="password_again" name="password_again">
          
          
        </fieldset>
        
        <fieldset>
          
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        	
        <button type="submit">Sign Up</button>
      </form>

<?php

}

?>		 




	

 
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

