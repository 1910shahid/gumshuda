<?php
	session_start();
	if(!isset($_SESSION['regid']))
	{
		header('location:login.php');
	}
	else
	{
		require_once('include/config.php');
	$vid=$_GET['vid'];
	$qs1="select * from missing where regid='$vid'";
	$data1=mysql_query($qs1);
	$row1=mysql_fetch_array($data1);
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
	<div class="viewmiss">
	
		<form action="viewprofile.php" method="post">
		<table>	
			
			<tr>
				<td >
					<img id="imgprofile" src="missing/upload/<?php echo $row1['mpic']; ?>"/>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $row1['name']; ?></td>
				<td>Gender</td>
				<td><?php echo $row1['gender']; ?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?php echo $row1['age']; ?></td>
				<td>Date of missing</td>
				<td><?php echo $row1['dom']; ?></td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><?php echo $row1['dob']; ?></td>
				<td>Description</td>
				<td><?php echo $row1['des']; ?></td>
			</tr>
			<tr>
				<td>Mentally ill</td>
				<td><?php echo $row1['mill']; ?></td>
				<td>Height</td>
				<td><?php echo $row1['height']; ?></td>
			</tr>
			<tr>
				<td>Relationship</td>
				<td><?php echo $row1['relationship']; ?></td>
				<td>Differentially Abled</td>
				<td><?php echo $row1['dabled']; ?></td>
			</tr>
			<tr>
				<td>Father's Name</td>
				<td><?php echo $row1['fname']; ?></td>
				<td>Father's email</td>
				<td><?php echo $row1['femail']; ?></td>
			</tr>
			<tr>
				<td>Father's Mobile No.</td>
				<td><?php echo $row1['fmnumber']; ?></td>
				<td>Mother's Name</td>
				<td><?php echo $row1['mname']; ?></td>
			</tr>
			<tr>
				<td>Mother's Email</td>
				<td><?php echo $row1['memail']; ?></td>
				<td>Mother's Mobile no.</td>
				<td><?php echo $row1['mmnumber']; ?></td>
			</tr>
			<tr>
				<td>Primary Language</td>
				<td><?php echo $row1['plang']; ?></td>
				<td>Other Language</td>
				<td><?php echo $row1['olang']; ?></td>
			</tr>
			<tr>
				<td>Child Aadhar</td>
				<td><?php echo $row1['childuid']; ?></td>
				<td>State</td>
				<td><?php echo $row1['state']; ?></td>
			</tr>
			<tr>
				<td>District</td>
				<td><?php echo $row1['district']; ?></td>
				<td>Last Seen</td>
				<td><?php echo $row1['address']; ?></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><?php echo $row1['pincode']; ?></td>
				<td>FIR state</td>
				<td><?php echo $row1['fstate']; ?></td>
			</tr>
			<tr>
				<td>FIR District</td>
				<td><?php echo $row1['fdistrict']; ?></td>
				<td>Police station</td>
				<td><?php echo $row1['pstation']; ?></td>
			</tr>
			<tr>
				<td>FIR Number</td>
				<td><?php echo $row1['fnumber']; ?></td>
				<td>FIR Date</td>
				<td><?php echo $row1['fdate']; ?></td>
			</tr>
			
		</table>
		</form>
	</div>
	
			<?php include('include/footer.php')?>

	</body>
	</html>