<?php 
require_once('include/config.php');
if(isset($_POST['save']))
{
	extract($_POST);
	$upic=$_FILES['upic']['name'];
	
	move_uploaded_file($_FILES['upic']['tmp_name'],"upload/".$upic);
	if($password!=$cpassword)
	{
		echo "Password mismatch";
	
	}
	else
	{
		
	$qs="insert into registration(name,mnumber,gender,address,uid,email,password,state,pincode,upic) values('$name','$mnumber','$gender','$address','$uid','$email','$password','$state','$pincode','$upic')";
	mysql_query($qs) or die(mysql_error());
	header('location:login.php');
	}
}


 ?>
<html>
<head>
<title>registration</title>

<link rel="stylesheet" href="css/registration.css" type="text/css" media="all" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script>
		function check()
		{
			if(document.getElementById("c1").checked==true)
			{
				return true;
			
			}
			else
			{
				return false;
				
			}
		}
		
	</script>
	<script type="text/javascript">
		function check(data)
		{
			var obj = new XMLHttpRequest();
			obj.open("GET","check.php?email="+data,true);

			obj.send();			
			obj.onreadystatechange=function()
			{
			
				if(obj.readyState==4&&obj.status==200)
				{
					document.getElementById("msg").innerHTML=obj.responseText;
				}
			};
		}
	</script>
</head>

<body style="background-image:url(images/cleg.jpeg)">
<?php include('include/header.php')?>
	<div class="center-container">
		<div class="header-w3l"><br/><br/><br/><br/>
			<h1>Register here</h1>
		</div>
	<div class="agileits-register">
		<form action="registration.php" method="post" enctype="multipart/form-data">
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name"  placeholder="Your Name" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Phone Number</span>
					<input type="text" name="mnumber" placeholder="Your Phone Number" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label><input type="radio" value="m"name="gender"><i></i>Male</label>
						</div>
						<div class="colr">
							<label ><input type="radio" value="f"name="gender"><i></i>Female</label>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
				</div>
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address:</span>
					<input type="text" name="address" placeholder="Your address" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Aadhar Number</span>
					<input type="text" name="uid" placeholder="Your Aadhar Number" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" onblur="check(this.value)" placeholder="Your E-mail" required=""/><span id="msg" style="color:red"></span>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="password" placeholder="Your Password " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Confirm Password:</span>
					<input type="password" name="cpassword" placeholder="Re-enter Password " required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>state</span>
					<select id="w3_country" class="frm-field required" name="state">
						<option value="">-select one-</option>
					<option value="anp">Andhra pradesh</option>
					<option value="a&n">Andaman and nicobar island</option>
					<option value="arp">Arunachal Pradesh</option>
					<option value="ap">Andhra pradesh</option>
					<option value="asm">Assam</option>
					<option value="bhr">bihar</option>
					<option value="chandi">Chandigarh</option>
					<option value="chatt">Chattisgarh</option>
					<option value="dh">Dadarnagar haveli</option>
					<option value="dd">Daman & diu</option>
					<option value="delhi">Delhi</option>
					<option value="goa">Goa</option>
					<option value="guj">Gujrat</option>
					<option value="har">Haryana</option>
					<option value="hp">Himachal</option>
					<option value="jk">Jammu kashmir</option>
					<option value="jh">jharkhand</option>
					<option value="kar">karnatka</option>
					<option value="kerl">kerala</option>
					<option value="mp">Madhya pradesh</option>
					<option value="maha">Maharashtra</option>
					<option value="or">orissa</option>
					<option value="pnb">Punjab</option>
					<option value="up">Uttar pradesh</option>
					<option value="jhar">Uttrakhand</option>
					<option value="pondi">Pondicherry</option>
					<option value="wb">West Bengal</option>			
					</select>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Pin Code</span>
					<input type="text" name="pincode" placeholder="Your Pincode Number" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Photo ID</span><br/>
					<input type="file" name="upic"/><br/><font size="2">(Upload JPG, PNG or GIF images under 2 MB)</font>
					<div class="clear"> </div>
				</div>
				<font size="2" >It is mandatory to provide id proof, 
						otherwise the account will be locked after 5 successful login attempts. 
						The user is advised to upload valid id proof
					</font>
				<div class="agree">
					<input type="checkbox" id="c1" name="cc">
					<label class="agileits-agree">I agree to the <a href="#">Terms and Conditions</a></label>
					<div class="clear"> </div>
				</div>
				<input type="submit" name="save" value="Register" onclick="return check()"/>
				<font style="forte" size="5" >If registered</font><a href="login.php"><font color="red">" CLICK HERE "</font></a>
					
				<div class="clear"></div>
			</form>
		</div>
		
		
	<div class="clear"></div>
		<!--//main-->
		
	</div>
	
	<?php include('include/footer.php')?>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>