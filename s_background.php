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
					
			$qs="update sighting set plang='$plang',olang='$olang' where regid ='$regid'";
			mysql_query($qs)or die(mysql_error());
	
			echo "<h1>".$last_id."</h1>";
			header('location:s_location_detail.php');
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

		
			<form method="post" action="s_background.php">
				<table>
					
				
					<tr>
						<td><label>Primary Languages</label></td>
						<td>
							<select name="plang">
								<option value="-1">-- Select --</option>
								<option value="1">Assamese</option>
								<option value="2">Bengali</option>
								<option value="3">Bodo</option>
								<option value="4">Dogri</option>
								<option value="5">English</option>
								<option value="6">Gujarati</option>
								<option value="7">Hindi</option>
								<option value="8">Kannada</option>
								<option value="9">Kashmiri</option>
								<option value="10">Konkani</option>
								<option value="11">Maithili</option>
								<option value="12">Malayalam</option>
								<option value="13">Manipuri</option>
								<option value="14">Marathi</option>
								<option value="15">Nepali</option>
								<option value="16">Odia</option>
								<option value="17">Punjabi</option>
								<option value="18">Sanskrit</option>
								<option value="19">Santali</option>
								<option value="20">Sindhi</option>
								<option value="21">Tamil</option>
								<option value="22">Telugu</option>
								<option value="23">Urdu</option>
								<option value="24">Cannot Speak</option>
							</select>
					</td>
						<td><label>Other Languages</label></td>
						<td>
							<select name="olang">
								<option value="-1">-- Select --</option>
								<option value="1">Assamese</option>
								<option value="2">Bengali</option>
								<option value="3">Bodo</option>
								<option value="4">Dogri</option>
								<option value="5">English</option>
								<option value="6">Gujarati</option>
								<option value="7">Hindi</option>
								<option value="8">Kannada</option>
								<option value="9">Kashmiri</option>
								<option value="10">Konkani</option>
								<option value="11">Maithili</option>
								<option value="12">Malayalam</option>
								<option value="13">Manipuri</option>
								<option value="14">Marathi</option>
								<option value="15">Nepali</option>
								<option value="16">Odia</option>
								<option value="17">Punjabi</option>
								<option value="18">Sanskrit</option>
								<option value="19">Santali</option>
								<option value="20">Sindhi</option>
								<option value="21">Tamil</option>
								<option value="22">Telugu</option>
								<option value="23">Urdu</option>
								<option value="24">Cannot Speak</option>
							</select>
						</td>
					</tr>
					<tr><td></td><td></td><td><input type="submit" name="update" value="next"/></td>
					</table>
			</form>
		</div>
				<?php include_once('include/footer.php');?>
	</body>
</html>