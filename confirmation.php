<?php
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:registration.php');
}

if(isset($_POST['save']))
{
	header('location:greeting.php');
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

	<script>
		function myfinal()
		{
		
			if(document.getElementById("agree").checked==true)
			{
				//return true;
				var name= confirm("Are you sure ?...")
			
				if(name==true)
				{
					window.location="greeting.php";
				}
				else
				{
						return false;
				}
			
			}
			else
			{
				return false;
				
			}
		
			
		
		}
		
	</script>
	</head>
	<body style="background:url(images/contact3.jpeg)">
	    <?php include('include/header2.php');?>

	    <?php include('include/nav.php');?>

		<div class="tandc">
		<form action="confirmation.php" method="post">
				<table>
					<tr >
						<th><font size="5">Usage Terms and Conditions<br/><br/><br/></font></th>
					</tr>
					<td>
						<h4>PLEASE READ THESE PORTAL USAGE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS PORTAL.</h4>
							<ol>
								<li>Uploading of Missing Child Information (Parent/Legal Guardian)</li></br>
									<ul type="disc">
										<li>The information entered is provided in good faith and is correct to the best of my knowledge and belief.</li></br>
										<li>I understand that the information provided by me shall be scrutinized by a moderator of the portal before it is published/uploaded in the website.</li></br>
										<li>Contact information entered can be made available to law enforcement agencies if required.</li></br>
										<li>It is my responsibility to share the information of the recovery of the child as soon as possible with the (Administrators of the portal for due closure).</li></br>
										<li>I understand that uploading any obscene or indecent picture/video will attract serious criminal liability.</li></br>
									</ul>
								<li>Uploading of Missing Child Information (Other than Parent/Legal Guardian)</li></br>
									<ul type="disc">
										<li>The information entered is provided in good faith and is correct to the best of my knowledge and belief.</li></br>
										<li>I have ensured that the details of parents/legal guardian entered by me are correct.</li></br>
										<li>Contact information entered can be made available to law enforcement agencies if required.</li></br>
										<li>I understand that uploading any obscene or indecent picture/video/unlawful information will attract serious criminal liability</li></br>
									</ul>
							</ol>
					</td>
						<tr>
							<td align="center">
								<input type="checkbox" name="agree" id="agree"><font size="2">I accept the <a href="../tandc.php">Terms and Conditions</a> as mentioned on this portal<font>
							</td>
						</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" value="Submit" name="save" onclick=" return myfinal()" ></td>
					</tr>
					
				</table>
				</form>
			
		</div>
		
					<?php include('include/footer.php')?>

	</body>
</html>