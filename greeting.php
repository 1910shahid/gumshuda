<?php
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:registration.php');
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
	<link type="text/css" rel="stylesheet" href="css/mss.css"/>
	
	</head>

	<body style="background:black;">
		<?php include_once('include/header2.php');?>

	<div style="color:red;text-align:center;margin-top:200px;padding-bottom:200px;"><h1> Registered Succesfully</h1></div>
	<?php include_once('include/footer.php');?>

	</body>
</html>