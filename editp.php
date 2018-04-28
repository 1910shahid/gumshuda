<?php
	require_once('include/config.php');
	session_start();
	if(!isset($_SESSION['regid']))
	{
		header('location:index.php');
	}
	else
	{
		
		$regid=$_SESSION['regid'];
		
		$qs="select * from registration where regid='$regid'";
		$data=mysql_query($qs)or die(mysql_error());
		$row=mysql_fetch_array($data);
	
	}
	if(isset($_POST['update']))
{
	extract($_POST);
	$qs="update registration set name='$name',mnumber='$mnumber',gender='$gender',address='$address',uid='$uid',email='$email',state='$state',pincode='$pincode' where regid='$regid'";
	mysql_query($qs)or die (mysql_error());

	
	header('location:dashboard.php');
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
	<link type="text/css" rel="stylesheet" href="css/mss.css">
	<?php include('tag.php');?>		
	<script src="js/jquery.min.js"></script>
</head>
	<body style="background:url(images/poster.jpeg">
		<?php include('include/headerlogout.php')?>

	<div class="edit">
		
		<form action="#" method="post">
		<table>	
		<tr>
				<td>
					<h1>Edit Profile</h1>
				</td>
			</tr>
			
			<tr>
				<td align="right">
					<img style="width:100px;height:100px;border-radius:50px;" src="upload/<?php echo $row['upic']; ?>"/>
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"value="<?php echo $row['name']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td><input type="text" name="mnumber"value="<?php echo $row['mnumber']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender"value="<?php echo $row['gender']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea rows="5" cols="30" name="address" class="form-control"><?php echo $row['address']; ?>"</textarea></td>
			</tr>
			<tr>
				<td>Aadhar Number</td>
				<td><input type="text" name="uid" value="<?php echo $row['uid']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"value="<?php echo $row['email']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td>State</td>
				<td><input type="text" name="state"value="<?php echo $row['state']; ?>" class="form-control"/></td>
			</tr>
			
			<tr>
				<td>Pin code</td>
				<td><input type="text" name="pincode"value="<?php echo $row['pincode']; ?>" class="form-control"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update" name="update" class="form-control"></td>
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