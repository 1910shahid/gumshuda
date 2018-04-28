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
		
			<form method="post" action="image_search.php">
				<table>
				
					<tr >
						<td><font size="5">Upload the Photograph of Child</font></td>
						<td></td>
						
					</tr>
					<tr>
						
						<td><input type="file" name="spic"value=""/></td>
						
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
						<input type="submit" value="Search" name="save">
						</td>

					</tr>
					
					
				</table>
			</form>
		</div>
			    <?php include('include/footer.php');?>

	</body>
</html>