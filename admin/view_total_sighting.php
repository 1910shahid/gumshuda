     
<?php
	require_once('include/config.php');

session_start();

if(!isset($_SESSION['a_id']))
{
	header('location:login.php');
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
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
<?php include('include/header.php');?>
						<div class="outter-wp">
											<?php include('include/count_status.php');?>
											<?php include('include/status.php');?>
												<ol class="breadcrumb m-b-0">
											<li><a href="index.html">Home</a></li>
											<li class="active">Total sighting's</li>
										</ol>
									<h3 class="inner-tittle two">Total Sighting's</h3>
													<div class="graph">
															<div class="tables">
															
																<table class="table table-hover">
																<thead>
																<tr>
																	<th>Sr.no</th>
																	<th>State</th>
																	<th>Girls</th>
																	<th>Boys</th>
																	<th>Transegender</th>
																</tr>
																</thead>
																<tbody>
																	<tr>
																	<?php
																	$qs="select distinct(city_state) from cities";
																	$data=mysql_query($qs);
																	$sr=1;
																	while($row=mysql_fetch_array($data))
																	{
																		$s=$row['city_state'];
																		$qs1="select count(*) from sighting where sstate='$s' and gender='female'";
																		$qs2="select count(*) from sighting where sstate='$s' and gender='male'";
																		$qs3="select count(*) from sighting where sstate='$s' and gender='other'";
																		$data1=mysql_query($qs1);
																		$data2=mysql_query($qs2);
																		$data3=mysql_query($qs2);
																		$row1=mysql_fetch_array($data1);
																		$row2=mysql_fetch_array($data2);
																		$row3=mysql_fetch_array($data3);
																	?>
																		<th scope="row"><?php echo $sr++; ?></th>
																		<td><?php echo $row['city_state']; ?></td>
																		<td><?php echo $row1[0]; ?></td>
																		<td><?php echo $row2[0]; ?></td>
																		<td><?php echo $row3[0]; ?></td>
																	</tr>
																	<?php
																	}
																	?>
																</tbody>
																</table>
															</div>
												
													</div>
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
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>