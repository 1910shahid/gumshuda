 <?php	
	session_start();
	if(!isset($_SESSION['regid']))
	{
		header('location:registration.php');
	}
	require_once('include/config.php');
	
	$regid=$_SESSION['last_id'];
		if(isset($_POST['update']))
		{
			extract($_POST);
					
			$qs="update missing set fname='$fname',mname='$mname',femail='$femail',memail='$memail',fmnumber='$fmnumber',mmnumber='$mmnumber',plang='$plang',olang='$olang',childuid='$childuid' where regid ='$regid'";
			mysql_query($qs)or die(mysql_error());
	
			echo "<h1>".$last_id."</h1>";
			header('location:location_details');
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
	<body style="background:url(images/contact3.jpeg)">
		    <?php include('include/header2.php');?>

	    <?php include('include/nav.php');?>

		<div class="maincontent">
		My Child Is Missing
		
			<form method="post" action="family_details.php">
				<table>
					
				
					<tr >
						<td><font size="5">Father's Details</font></td>
						<td></td>
						<td><font size="5">Mother's Details</font></td>
						<td></td>
					</tr>
					<tr>
						<td><label>Father Name</label></td>
						<td><input type="text" name="fname" placeholder="Child father name"value=""/></td>
						<td><label>Mother Name</label></td>
						<td><input type="text" name="mname" placeholder="Child Mother name" value=""/></td>
					</tr>
					<tr>
						<td><label>Father Email</label></td>
						<td><input type="email" name="femail" placeholder="Child's father email" value=""/></td>
						<td><label>Mother Email</label></td>
						<td><input type="email" name="memail" placeholder="Child's Mother email" value=""/></td>
					</tr>
					<tr>
						<td><label>Father Mobile Number</label></td>
						<td><input type="text" name="fmnumber" placeholder="Child's father mobile" value=""/></td>
						<td><label>Mother Mobile Number</label></td>
						<td><input type="text" name="mmnumber" placeholder="Child's Mother mobile" value=""/></td>
					</tr>
					<tr>
						<td><font size="5">Child Details</font></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><label>Primary Languages</label></td>
						<td>
							<select name="plang" value="">
								<option value="-1">-- Select --</option>
								<option value="Assamese">Assamese</option>
								<option value="Bengali">Bengali</option>
								<option value="Bodo">Bodo</option>
								<option value="Dogri">Dogri</option>
								<option value="English">English</option>
								<option value="Gujarati">Gujarati</option>
								<option value="Hindi">Hindi</option>
								<option value="Kannada">Kannada</option>
								<option value="Kashmiri">Kashmiri</option>
								<option value="Konkani">Konkani</option>
								<option value="Maithili">Maithili</option>
								<option value="Malayalam">Malayalam</option>
								<option value="Manipuri">Manipuri</option>
								<option value="Marathi">Marathi</option>
								<option value="Nepali">Nepali</option>
								<option value="Odia">Odia</option>
								<option value="Punjabi">Punjabi</option>
								<option value="Sanskrit">Sanskrit</option>
								<option value="Santali">Santali</option>
								<option value="Sindhi">Sindhi</option>
								<option value="Tamil">Tamil</option>
								<option value="Telugu">Telugu</option>
								<option value="Urdu">Urdu</option>
								<option value="Cannot Speak">Cannot Speak</option>
							</select>
						</td>
						<td><label>Other Languages</label></td>
						<td>
							<select name="olang" value="">
								<option value="-1">-- Select --</option>
								<option value="Assamese">Assamese</option>
								<option value="Bengali">Bengali</option>
								<option value="Bodo">Bodo</option>
								<option value="Dogri">Dogri</option>
								<option value="English">English</option>
								<option value="Gujarati">Gujarati</option>
								<option value="Hindi">Hindi</option>
								<option value="Kannada">Kannada</option>
								<option value="Kashmiri">Kashmiri</option>
								<option value="Konkani">Konkani</option>
								<option value="Maithili">Maithili</option>
								<option value="Malayalam">Malayalam</option>
								<option value="Manipuri">Manipuri</option>
								<option value="Marathi">Marathi</option>
								<option value="Nepali">Nepali</option>
								<option value="Odia">Odia</option>
								<option value="Punjabi">Punjabi</option>
								<option value="Sanskrit">Sanskrit</option>
								<option value="Santali">Santali</option>
								<option value="Sindhi">Sindhi</option>
								<option value="Tamil">Tamil</option>
								<option value="Telugu">Telugu</option>
								<option value="Urdu">Urdu</option>
								<option value="Cannot Speak">Cannot Speak</option>
							</select>
						</td>
					</tr>
					<tr>
					<td><label>Child Aadhar Number</label></td>
					<td><input type="text" name="childuid" placeholder="Child Aadhar Number"/></td>
					<td></td>
					<td></td>
					<tr>
						<td><a href="Basic_details.php">Back to the previous</td>
						<td></td>
						<td></td>
						<td><input type="submit" value="Next" name="update"></td>
						<td></td>
					</tr>
					
				</table>
			</form>
		</div>
			    <?php include('include/footer.php');?>
	</body>
</html>