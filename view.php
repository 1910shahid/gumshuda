<?php	
	session_start();
	if(!isset($_SESSION['regid']))
	{
		header('location:login.php');
	}
	require_once('include/config.php');
	$regid=$_SESSION['regid'];
	
	$qs="select * from registration where regid='$regid'";
	$data=mysql_query($qs)or die(mysql_error());
	$row=mysql_fetch_array($data);
	
?>

<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/mss.css">
	<?php include('tag.php');?>		
	<script src="js/jquery.min.js"></script>
</head>
	<body style="background:url(images/poster.jpeg" >
		<?php include('include/headerlogout.php')?>
	<div class="view">
	
		<form action="#" method="post">
		<table style="color:black; padding-top:20px;">	
			<tr>
				<td>
					<h1>View Profile</h1>
				</td>
			</tr>
			<tr>
				<td align="right">
					<img style="width:100px;height:100px;border-radius:50px;" src="upload/<?php echo $row['upic']; ?>"/>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $row['name']; ?></td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td><?php echo $row['mnumber']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $row['gender']; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $row['address']; ?></td>
			</tr>
			<tr>
				<td>Aadhar Number</td>
				<td><?php echo $row['uid']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $row['state']; ?></td>
			</tr>
			
			<tr>
				<td>Pin code</td>
				<td><?php echo $row['pincode']; ?></td>
			</tr>
			
		</table>
		</form>
	</div>
	<a href="dashboard.php">Back</a>
	<?php include('include/footer.php')?>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
	</html>