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
<?php include_once('include/header2.php');?>

				<?php include_once('include/nav.php');?>


		<div class="tandc">
	<form action="s_confirmation.php" method="post">
				<table>
					<tr >
						<th><font size="5">Usage Terms and Conditions<br/><br/><br/></font></th>
					</tr>
					<td>
						<h4>PLEASE READ THESE PORTAL USAGE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS PORTAL.</h4>
							
								Uploading information about sighted/found child.</li>
									<ul type="disc">
										<li>The information entered is provided in good faith.</li></br>
										<li>I have satisfied myself that the child may be abandoned run away trafficked kidnapped or missing and is in need of assistance care and protection.</li></br>
										<li>Contact information entered can be made available to law enforcement agencies if required.</li></br>
										<li>I have taken precaution not to disclose the facts/details of the offence if any committed by such child.</li></br>
										<li>I have also taken precaution not to disclose any information regarding victim or suspected victim of child sexual abuse.</li></br>
										<li>I understand that uploading any obscene or indecent picture/video/unlawful information will attract serious criminal liability.</li>
									</ul>
								
							
					</td>
						<tr>
							<td align="center">
								<input type="checkbox" id="agree"/><font size="2">I accept the.Terms and Conditions as mentioned on this portal<font>
							</td>
						</tr>
					<tr>
						<td><input type="submit" value="Submit" name="save" onclick=" return myfinal()"></td>
					</tr>
					
				</table>
				</form>
		</div>	
	<?php include_once('include/footer.php');?>
	</body>
</html>