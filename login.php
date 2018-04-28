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
		$qs="select * from registration where name='$name' and password='$password'";
		$data=mysql_query($qs)or die(mysql_error());
		if(mysql_num_rows($data)>0)
		{
			if(isset($_POST['rem']))
			{
				setcookie("name",$name,time()+60*60);
				setcookie("password",$password,time()+60*60);
			
			

			}
			$row=mysql_fetch_array($data);
			
			$_SESSION['regid']=$row['regid'];
			header('location:dashboard.php');
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
	<link rel="stylesheet" href="css/mss.css"/>

</head>
<?php include('include/header2logout.php');?>
<body style="background-image:url(images/login.jpeg)">


	<div class="header-w3l">
		
	</div>
	<div class="main-content-agile">
		<div class="sub-main-w3">
			
			<h2>Login Here</h2>
			<form action="login.php" method="post">
				<div class="pom-agile">
					<span class="fa fa-user-o" aria-hidden="true"></span>
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
	<!--//main-->
	
    <?php include('include/footer.php');?>
</body>

</html>