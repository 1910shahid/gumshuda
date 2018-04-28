
<?php
$mesg=""; 
	session_start();
	require_once('include/config.php');
	
	if(isset($_POST['login']))
	{
		extract($_POST);
		$qs="select * from login where email='$email' and password='$password'";
		$data=mysql_query($qs)or die(mysql_error());
		if(mysql_num_rows($data)>0)
		{
			
			$row=mysql_fetch_array($data);
			
			$_SESSION['a_id']=$row['a_id'];
			header('location:index.php');
		}
		else
		{
			$mesg= "Invalid email id or username";
		}
	}

	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body style="background:url(images/login.jpeg);">
								
												
													<div class="error-top">
													<h2 class="inner-tittle page">Gumshuda</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																<div class="buttons login">
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
																				<div class="clearfix"></div>
																			</ul>
																		</div>
																<form method="post" action="login.php">
																		<input type="text" class="text" placeholder="E-mail address" name="email">
																		<input type="password" placeholder="Password" name="password">
																		<div class="submit"><input type="submit"  value="Login" name="login" ></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																	
																			<span style="color:red"><?php echo $mesg; ?></span>
															
																		</div>
																	</form>
														</div>

														
													</div>
													
													
					
										 
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												
										   <p>&copy 2016 <a href="https://Gumshuda.infomax.com/" target="_blank">GUMSHUDA</a> . All Rights Reserved | Design by Mohammad Shahid</p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>