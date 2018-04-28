<?php
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:registration.php');
}
	require_once('include/config.php');
	
	$regid = $_SESSION['last_id'];

		if(isset($_POST['update']))
		{
			extract($_POST);
			$mpic=$_FILES['mpic']['name'];
			$mvideo=$_FILES['mvideo']['name'];
			if(($_FILES['user_pic']['size']/1024)>50)
			{
				echo "File size must be less tha 50 KB";
			}
			else
			{
				move_uploaded_file($_FILES['mpic']['tmp_name'],"miss_upload/".$mpic);			
				move_uploaded_file($_FILES['mvideo']['tmp_name'],"miss_upload_vid/".$mvideo);
				$qs="update missing set mpic ='$mpic',mvideo='$mvideo' where regid ='$regid'";
				mysql_query($qs)or die(mysql_error());
				header('location:Fir_details.php');
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
		<link type="text/css" rel="stylesheet" href="css/mss.css"/>
	</head>
	<body style="background:url(images/contact3.jpeg)">
		    <?php include('include/header2.php');?>

		<?php include_once('include/nav.php');?>

		<div class="maincontent">
		My Child Is Missing
		
			<form method="post" action="upload_media.php" enctype="multipart/form-data">
				<table>
					<tr >
						<td><font size="5">Photo's</font></td>
						<td></td>
						<td><font size="5">Video's</font></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td ><input type="file" name="mpic" id="pic"/></br><font size="2"><br/>(Upload JPG, PNG or GIF images under 2 MB)</font></td>
						<td></td>
						<td ><input type="file" name="mvideo" id="pic" /></br><font size="2"><br/>( Upload video under 50 MB )</font></td>
					</tr>
					<tr>
				
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