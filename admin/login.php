<?php 
$upic="";
$name="";
$password="";
$mesg="";
	session_start();
	require_once('include/config.php');
	
	if(isset($_POST['login']))
	{
		extract($_POST);
		$qs="select * from login where name='$name' and password='$password'";
		$data=mysql_query($qs)or die(mysql_error());
		if(mysql_num_rows($data)>0)
		{
			if(isset($_POST['rem']))
			{
				setcookie("name",$name,time()+60*60);
				setcookie("password",$password,time()+60*60);
			
			

			}
			$row=mysql_fetch_array($data);
			
			$_SESSION['a_id']=$row['a_id'];
			header('location:index.php');
		}
		else
		{
			$mesg= "invalid email id or username";
		}
	}
if(isset($_COOKIE['name']))
{
	$name=$_COOKIE['name'];
	$password=$_COOKIE['password'];
	
}
	
?>

<html>

<head>
	<title></title>

	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />

	<link rel="stylesheet" href="css/font-awesome.css"/>

</head>

<body style="background-image:url(images/pexels-photo-733854.jpeg)">


	<div class="header-w3l">
		
	</div>
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<img src="images/IMG_20170906_122017_791.jpg"  width="150px" height="200px"alt="" />
			<h2>Mohammad Shahid</h2>
			<h2 style="color:black">Administrator</h2>
			<form action="login.php" method="post">
				<div class="pom-agile">
					<span class="fa fa-user" aria-hidden="true"></span>
					<input placeholder="Username" name="name" class="user" type="text" value="<?php echo $name;?>" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Password" name="password" class="pass" type="password" value="<?php echo $password;?>" required="">
				</div>
				<span style="color:red;"><?php echo $mesg;?></span>
				<div class="sub-w3l">
					<div class="right-w3l">
						<input type="checkbox" name="rem">Remember me
						
							
					</div>
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
					<input type="submit" name="login">
				</div>
				<div class="forgot-w3l">
					<a href="forgot_password.php">Forgot Password?</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>