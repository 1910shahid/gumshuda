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
			$qs="update missing set state='$state',district='$district',address='$address',pincode='$pincode' where regid ='$regid'";
			mysql_query($qs)or die(mysql_error());
			header('location:upload_media.php');
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
	<script type="text/javascript">
		function makedd(data)
		{
		
			var obj = new XMLHttpRequest();
			obj.open("GET","check_state.php?id="+data,true);
			obj.send();			
			obj.onreadystatechange=function()
			{
			
				if(obj.readyState==4&&obj.status==200)
				{
					document.getElementById("district").innerHTML=obj.responseText;
				}
			};
			
		}
	</script>
	</head>
	<body style="background:url(images/contact3.jpeg)">
    <?php include('include/header2.php');?>

		<?php include_once('include/nav.php');?>

		<div class="maincontent">
		My Child Is Missing
		
			<form method="post" action="location_details.php">
				<table>
					
				
					<tr>
						<td><label>State</label></td>
						<td>
							<select name="fstate"  onchange="makedd(this.value)" required>
								<option value="-1">-- Select --</option>
							<?php
								
								$qs="select distinct city_state from cities";
								$data=mysql_query($qs)or die (mysql_error());
										$sr=1;							
									while($row=mysql_fetch_array($data))
										{
											
							?>	<option value="<?php echo $row['city_state'];?>"><?php echo $row['city_state'];?></option>
								<?php
								}
								?>
								</select>
					</td>
						<td><label>District</label></td>
						<td>
							<select name="fdistrict" id="district">
								<option value="">----District----</option>
								
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Address/locality</label></td>
						<td><textarea rows="3" cols="50" placeholder="Child was lost from/last seen?"name="address" ></textarea></td>
					</tr>
					<tr>
						<td><label>Pin Code</label></td>
						<td><input type="text" name="pincode" placeholder="Enter PIN code" /></td>
						<td><label></label></td>
						<td></td>
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
			    <?php include('include/footer.php');?>
	</body>
</html>