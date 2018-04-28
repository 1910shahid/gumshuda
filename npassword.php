<?php
require_once('include/config.php');
$mesg="";
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:index.php');
}

$regid=$_SESSION['regid'];
if(isset($_POST['reset']))
{
	extract($_POST);
	$qs="select * from registration where regid='$regid'";
	
	$data=mysql_query($qs);
	$row=mysql_fetch_array($data);
	
	if($row['password']='$opassword')
	{
		
		$qs="update registration set password='$npassword' where regid='$regid'"; 
		mysql_query($qs)or die(mysql_error());
		header('location:login.php');
	}
	else
		
		{
			$mesg= "invalid password";
		}
}
require_once('include/config.php');
$regid =$_SESSION['regid'];
$qs="select * from registration where regid='$regid'";
		$data=mysql_query($qs)or die(mysql_error());
		if(mysql_num_rows($data)>0)
		{
			$row=mysql_fetch_array($data);
		}
?>


<html>
<head>
<title>change password</title>
		<link href="css/cfpaass.css" rel="stylesheet" type="text/css" media="all"/>
		<?php include('tag.php');?>		
		<script src="js/jquery.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body style="background:url(images/contact3.jpeg); padding-top:80px;">	
		<?php include('include/headerlogout.php')?>

	<!-- login -->
		<div class="login-section w3l" style="padding-bottom:67px;">
		
		<div class="sig-top agileits">
			
			<div class="sig-btm w3agile">
			<div class="signup">
			<div class="modal-content modal-info">
				<div class="modal-header">				
					<h3>Change password ?</h3>	
					
				</div>
				<div class="modal-body modal-spa">
					<div class="login-form">			
						<form action="npassword.php" method="post">
							<ol>
								<li>
									<input type="password"  name="opassword" placeholder="old password" title="Please enter a old password" required=""><span style="color:red"><?php echo $mesg;?></span>
									<input type="password"  name="npassword" placeholder="new password" title="Please enter a new password" required="">
								</li>
							</ol>
								<input type="submit" value="Update" name="reset">
						</form>																					
						</div>							
					</div>
				</div>
			</div></div></div>
				<div class="clear"></div>
			</div >		
<?php include('include/footer.php')?>
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>			
			
</body>
</html>