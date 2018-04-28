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
	
	<body style="background:url(images/contact3.jpeg)">
<?php include('include/header2.php');?>
    <?php include('include/search_nav.php');?>
		<div class="maincontent">
		
			<form method="post" action="viewmiss.php">
				<table>
				<tr >
						<td><font size="5">Quick Search</font></td>
						<td></td>
						
					</tr>
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="name" placeholder="Enter child's name"/></td>
					</tr>
					<tr>
						<td><label>Gender</label></td>
						<td>
							<select name="gender">
								<option value="">----gender----</option>
								<option value="male">male</option>
								<option value="female">female</option>
								<option value="other">other</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Age in year</label></td>
						<td><input type="number" name="age" placeholder="age"/></td>
						<tr>
							<td></td>
							<td>
								Search in : <input type="radio" name="search">Missing: 
											<input type="radio" name="search">Sighting
											<input type="checkbox" name="search">Both

							</td>

						</tr>
					
						<tr>
							<td></td>
							<td>
								<input type="reset" value="Reset" name="reset">
								<input type="submit" value="Search" name="search">
							</td>

					</tr>
					
					
					
				</table>
			</form>
		</div>
				<?php include('include/footer.php')?>

	</body>
</html>