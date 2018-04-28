<?php
session_start();
if(!isset($_SESSION['regid']))
{
	header('location:registration.php');
}

require_once('include/config.php');
if(isset($_POST['save']))
{
	extract($_POST);
	$height=$feet.".".$inches;
	$age=$year.".".$month;
	$dos=date('Y-m-d',strtotime($dos));
		
	$qs="insert into sighting(name,age,dos,des,mill,gender,height,reason,dabled) values('$name','$age','$dos','$des','$mill','$gender','$height','$reason','$dabled')";
	
	mysql_query($qs) or die(mysql_error());
	$last_id = mysql_insert_id();
	$_SESSION['last_id']=$last_id;
	header('location:s_background.php');
	
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

		
			<form method="post" action="s_basic_detail.php">
				<table>
					
				
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="name" placeholder="name"/></td>
						<td></td>
						
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
						<td><label>Approximate Age</label></td>
						<td>
							<select name="year">
								<option value="0">----Year----</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="7">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
							
							</select>
							</td>
							<td>

							
							<select name="month">
								<option value="0">----Month----</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
					
							</select>
						</td>
						<td width="15%"><label>Appproximate Height</label></td>
						<td>
							<select name="feet">
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
							<td>
							<select name="inches">
								<option value="">----Inches----</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Date of sighting</label></td>
						<td><input type="date" name="dos" placeholder="date of missing"/></td>
						<td></td>
						<td><label>Reason</label></td>
					<td><textarea rows="3" cols="30" placeholder="Please explain the reason why you think the child is lost"name="reason"></textarea></td>
					</tr>
					</tr>
					<tr>
					<td><label>Description</label></td>
					<td><textarea rows="3" cols="30" placeholder="How and where the child is sighted"name="des"></textarea></td>
					<td></td>
					<td><label>Differently abled<br/>(physical/mental)</label></td>
					<td><input type="radio"name="dabled" value="yes"/> Yes<input type="radio"name="Dabled" value="no" checked /> No</td>
					</tr>
					<tr>
					<td><label>Mentally ill</label></td>
					<td><input type="radio"name="mill" value="yes"/> Yes<input type="radio"name="mill" value="no" checked /> No</td>
					<td></td>
					<td><input type="submit" value="Next" name="save"></td>
					</tr>
					
				</table>
			</form>
		</div>
				<?php include_once('include/footer.php');?>
	</body>
</html>