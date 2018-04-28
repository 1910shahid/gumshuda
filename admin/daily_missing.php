
<?php	
session_start();

if(!isset($_SESSION['a_id']))
{
	header('location:login.php');
}															
require_once('include/config.php');
if(isset($_GET['did']))
{	
	$rid=$_GET['did'];
	$qs="delete from missing where regid='$rid'";

	mysql_query($qs);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>admin</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
<?php include('include/header.php');?>
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.html">Home</a></li>
											<li class="active">Daily Missings</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
					
										        </div>

													<h3 class="inner-tittle two">Daily Missings</h3>
													<div class="grid-1">
														<div class="form-body">
															<div data-example-id="simple-form-inline">
																<form class="form-inline">
																	<div class="form-group">
																		<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Date Of Missing From">
																	</div>
																	<div class="form-group">
																		<input type="text" class="form-control" id="exampleInputPassword3" placeholder="Date Of Missing To">
																	</div> 
																	<div class="checkbox">
																	</div> 
																		<button type="submit" class="btn btn-default">Filter</button>
																</form> 
															</div>
														</div>
													</div>
													<div class="graph">
													
															<div class="tables">
															
															<table class="table table-hover"> <thead> 
																<tr> 
																	<th>Sr.No</th>
																	<th>Reg_id</th> 
																	<th>Name</th> 
																	<th>Aadhar Number</th> 
																	<th>Date of missing</th>
																	<th>Operation</th>
																	
																</tr> </thead> 
																<tbody> 
																<?php
																	require_once('include/config.php');
																	
																	$qs="select * from missing";
																	$data=mysql_query($qs)or die (mysql_error());
																	$sr=1;
																	if(mysql_num_rows($data)==0)
																	{
																		echo "No records found";
																	}
																	else
																	{
																	while($row=mysql_fetch_array($data))
																	{
																	?>
																	<tr> 
																		<th scope="row"><?php echo $sr++; ?></th>
																		<td><?php echo $row['regid']; ?></td>
																		<td><?php echo $row['name']; ?></td>
																		<td><?php echo $row['childuid']; ?></td>
																		<td><?php echo $row['dom']; ?></td>
																		<td><a href="daily_missing.php?did=<?php echo $row['regid']; ?>" onclick="return confirm('Are you Sure for delete')">&#128465;Delete</a></td>

																	</tr>
																	<?php
																	}
																	}
																	?>
																	
																</tbody> 
															</table>
															</div>
												
													</div>
													
													
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
								 <?php include('include/footer.php');?>
								</div>
							</div>
				<!--//content-inner-->
						<?php include('include/sidebar.php');?>

							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>