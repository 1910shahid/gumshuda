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
	$dom=date('Y-m-d',strtotime($dom));
	$dob=date('Y-m-d',strtotime($dob));

	$qs="insert into missing(name,age,dom,dob,des,mill,gender,height,relationship,dabled) values('$name','$age','$dom','$dob','$des','$mill','$gender','$height','$relationship','$dabled')";
	

	mysql_query($qs) or die(mysql_error());
	$last_id = mysql_insert_id();
	$_SESSION['last_id']=$last_id;
	header('location:family_details.php');
	
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

    <?php include('include/nav.php');?>
		<div class="maincontent">
		My Child Is Missing
		
			<form method="post" action="basic_details.php">
				<table>
					<tr >
						<th colspan="5"><font size="5">Please enter the attributes as at the time of missing.<br/><br/><br/></font></th>
					</tr>
					<tr>
						<td align="left"><label>Name</label></td>
						<td><input type="text" name="name" placeholder="missing child name"  /></td>
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
						<td><label>Age at the time of missing</label></td>
						<td><input type="number" name="age" placeholder="age"/></td>
						<td width="15%"><label>Appproximate Height</label></td>
						<td>
							<select name="feet">
								<option value="0">----Feet----</option>
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
								<option value="0">----Inches----</option>
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
						<td><label>Date of missing</label></td>
						<td><input type="date" name="dom" placeholder="date of missing" /></td>
						<td><label>Reltionship</label></td>
							<td>
								<select name="relationship">
									<option value="">----Relation----</option>
									<option value="Parent">Parent</option>
									<option value="legal guardian">Legal Guardian</option>
									<option value="Other">Other</option>
								</select>
							</td>
					</tr>
					<tr>
						<td><label>Date of birth</label></td>
						<td><input type="date" name="dob" placeholder="Date of birth"/></td>
						<td><label>Differently abled<br/>(physical/mental)</label></td>
						<td><input type="radio" name="dabled" value="yes"/> Yes
							<input type="radio" name="dabled" value="no" checked /> No
						</td>
					</tr>
					<tr>
						<td><label>Description</label></td>
						<td><textarea rows="3" cols="30" name="des" placeholder="describe how the child was lost"></textarea></td>
					</tr>
					<tr>
						<td><label>Mentally ill</label></td>
						<td><input type="radio" name="mill" value="Yes"/> Yes
							<input type="radio" name="mill" value="No" checked /> No
						</td>
						<td><input type="submit" value="Next" name="save"></td>
					</tr>
					
				</table>
			</form>
		</div>
<?php include('include/footer.php')?>

	</body>
</html>