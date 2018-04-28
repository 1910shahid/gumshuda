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
			move_uploaded_file($_FILES['mpic']['tmp_name'],"sight_upload/".$mpic);
			$mvideo=$_FILES['mvideo']['name'];
			move_uploaded_file($_FILES['mvideo']['tmp_name'],"sight_upload_vid/".$mvideo);
			$qs="update sighting set mpic ='$mpic',mvideo='$mvideo' where regid ='$regid'";
			mysql_query($qs)or die(mysql_error());
			header('location:s_confirmation.php');
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
<?php include_once('include/header2.php');?>
		<?php include_once('include/s_nav.php');?>

		<div class="maincontent">
		I have sighted a child
		
			<form method="post" action="s_upload_media.php" enctype="multipart/form-data">
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
						<td ><input type="file" name="mpic"id="pic"/></br><font size="2"><br/>(Upload JPG, PNG or GIF images under 2 MB)</font></td>
						<td></td>
						<td ><input type="file" name="mvideo"id="pic"/></br><font size="2"><br/>(Upload video under 100 MB)</font></td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Next" name="update"></td>
					<td></td>
					</tr>
					
				</table>
			</form>
		</div>
		<?php include_once('include/footer.php');?>
		
	</body>
</html>