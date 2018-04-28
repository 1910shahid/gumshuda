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
						<td><font size="5">Advanced Search</font></td>
						<td></td>
						
					</tr>
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="name" placeholder="name"/></td>
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
						<td><label>Minimum age in year</label></td>
						<td><input type="number" name="age" placeholder="age"/></td>
							
						<td width="15%"><label>Maximum age in Year</label></td>
						<td><input type="number" name="age" placeholder="age"/></td>
							
					</tr>
					<tr>
						<td width="15%"><label>Minimum Height in feet</label></td>
						<td>
							<select name="height">
								<option value="">----Feet----</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</td>
						<td width="15%"><label>Maximum Height in feet</label></td>
						<td>
							<select name="height">
								<option value="">----Feet----</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</td>
						</tr>
					<tr>
						<td><label>Date of missing/sighting from</label></td>
						<td><input type="date" name="dom"/></td>
						<td><label>Date of missing/sighting to</label></td>
						<td><input type="date" name="dom"/></td>

					</tr>
					<tr>
							<td></td>
							<td>
								Search in : <input type="radio" name="search">Missing: 
											<input type="radio" name="search">Sighting
											<input type="radio" name="search">Both

							</td>

						</tr>
					<tr>
						<td></td>
						<td>
						
						<input type="reset" value="Reset" name="reset">
						<input type="submit" value="Search" name="adv_search">
						</td>

					</tr>
					
				</table>
			</form>
		</div>
		
		 <?php include('include/footer.php');?>

	</body>
</html>