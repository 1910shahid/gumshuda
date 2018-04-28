<?php
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:.index.php');
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

	<body style="background:url(images/light.jpeg)">
			<?php include_once('include/header2.php');?>

	<div style="color:red;text-align:center;padding-bottom:400px;"><h1>oops!!! Sorry "Child Not Found" </h1><a href="quick_search.php">Back</a></div>
	
		<?php include_once('include/footer.php');?>

	</body>
</html>