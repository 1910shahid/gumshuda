<?php 
require_once('include/config.php');
if(isset($_POST['save']))
{
	extract($_POST);
	$qs="insert into feedback(name,mnumber,address,email,message) values('$name','$mnumber','$address','$email','$message')";
	mysql_query($qs) or die(mysql_error());
	header('location:greeting.html');
}
?>
<html>
<head>
<title>feedback</title>

<link rel="stylesheet" href="css/registration.css" type="text/css" media="all" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-image:url(images/login.jpeg)">
<?php include('include/header.php')?>
	<div class="center-container">
		<div class="header-w3l"><br/><br/><br/><br/>
			<h1>Post Your Feedback</h1>
		</div>
	<div class="agileits-register">
		<form action="feedback.php" method="post">
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name" placeholder=" Name" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Mobile Number</span>
					<input type="text" name="mnumber" placeholder="Mobile Number" required=""/>
					<div class="clear"> </div>
				</div>
				
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address:</span>
					<input type="text" name="address" placeholder="Address" required=""/>
					<div class="clear"> </div>
				</div>
				
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" placeholder="E-mail" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Message:</span>
					<input type="text" name="address" placeholder="Drop a message for us" required=""/>
					<div class="clear"> </div>
				</div>
				
					
				<input type="submit" name="save" value="Submit" />
				<input type="submit" name="save" value="Clear" />

				
					
				<div class="clear"></div>
			</form>
		</div>
		
		
	<div class="clear"></div>
		<!--//main-->
		
	</div>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<?php include('include/footer.php')?>

</body>
</html>