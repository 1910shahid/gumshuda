<?php 
require_once('include/config.php');
if(isset($_POST['save']))
{
	extract($_POST);
	$fullname=$fname." ".$lname;
	$qs="insert into contact(name,email,subject,message) values('$fullname','$email','$subject','$message')";
	mysql_query($qs) or die(mysql_error());
	header('location:greeting.html');
}

?>
<html>
<head>
<title>Contact us</title>

<link href="css/contact.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/mss.css"/>

 
</head>
<body style="background:url(images/contact2.jpeg)">
<?php include('include/header2logout.php')?>
<h1>Contact us</h1>
	        <div class="login-w3l">	
			<div class="top-img-agileits-w3layouts">
				<h2 class="sub-head-w3-agileits">Fill the form</h2>
				<p>Drop a message</p>
				<div class="login-form">	
				<form action="contact.php" method="post">
					<input type="text" name="fname" placeholder="First Name" required="" />
					<input type="text" name="lname" placeholder="Last Name" required="" />
					<input type="email" name="email" placeholder="Email" required="" />
					<input type="text" name="subject" placeholder="Subject" required="" />
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Send" name="save">
				</form>	
			</div>
			</div>			
			
			<!-- //login -->
				</div> 
				<div class="clear"></div>
			
			<!--//login-->
							<?php include('include/footer.php')?>

</body>
</html>