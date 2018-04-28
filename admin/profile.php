

<?php
session_start();

if(!isset($_SESSION['a_id']))
{
	header('location:login.php');
}
?>
<html>
<head>
<title>ADMIN</title>

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
											<li class="active">Profile</li>
										</ol>
									   </div>
								    <!--//sub-heard-part-->
										<!--/profile-->
										<h3 class="sub-tittle pro">Profile</h3>
									       <div class="profile-widget">
														<img src="images/IMG_20170906_122017_791.jpg" width="120px" height="150px" alt="Mohammad Shahid" />
														<h2>Mohammad Shahid</h2>
														<p>Admin</p>
													</div>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-6 profile-info">
																	<h3 class="inner-tittle">Personal Information </h3>
																	<div class="main-grid3">
																     <div class="p-20">
																		<div class="about-info-p">
																			<strong>Full Name</strong>
																			<br>
																			<p class="text-muted">Mohammad Shahid</p>
																		</div>
																		<div class="about-info-p">
																			<strong>Mobile</strong>
																			<br>
																			<p class="text-muted">(+91) 9450916538</p>
																		</div>
																		<div class="about-info-p">
																			<strong>Email</strong>
																			<br>
																			<p class="text-muted"><a href="mailto:shahidnetworkingtcpip@gmail.com">shahidnetworkingtcpip@gmail.com</a></p>
																		</div>
																		<div class="about-info-p m-b-0">
																			<strong>Location</strong>
																			<br>
																			<p class="text-muted">Mumbai, India</p>
																		</div>
																	</div>
																 </div>
																 <h3 class="inner-tittle">Biography </h3>
																<div class="main-grid3 p-skill">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
																	<p class="para">But also the leap into electronic typesetting, remaining essentially unchanged.</p>
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
																</div>
																<h3 class="inner-tittle two">Skills </h3>
																	<div class="main-grid3">
																      	<div class="bar">
																			<p>UI/UX Designer</p>
																		</div>
																			<div class="skills">
																				 <div class="skill1" style="width:100%"> </div>							
																			</div>
																				<div class="bar">
																					<p>HTML / CSS3 / SASS</p>
																				</div>
																			<div class="skills">
																				 <div class="skill2" style="width:90%"> </div>							
																			</div>
																			<div class="bar">
																			<p>Jquery/ AJAX / Bootstrap </p>
																		</div>
																			<div class="skills">
																				 <div class="skill1" style="width:100%"> </div>							
																			</div>
																				<div class="bar">
																					<p>Javascript</p>
																				</div>
																			<div class="skills">
																				 <div class="skill3" style="width:75%"> </div>							
																			</div>
																			<div class="bar">
																					<p>Wordpress</p>
																				</div>
																			<div class="skills">
																				 <div class="skill4" style="width:85%"> </div>							
																			</div>
																    </div>
															  </div>
															   <div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle">Activity </h3>
																<div class="main-grid3 p-skill">
														
																		<ul class="timeline">
																			<li>
																			  <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.php">Mohammad Shahid</a></h4>
																				</div>
																				<div class="timeline-body">
																				 <p class="time">5 Minutes ago</p>
																				  <p>Uploaded 2 new Photos <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																			
																			<li>
																			  <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.html">Mohammad Shahid</a></h4>
																				</div>
																				<div class="timeline-body">
																				   <p class="time">2 Minutes ago</p>
																				  <p>Uploaded 2 new Photos <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																			
																			
																			
																			<li>
																			  <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.php">Mohammad Shaahid</a></h4>
																				</div>
																				<div class="timeline-body">
																				   <p class="time">10 Minutes ago</p>
																				  <p>Uploaded 5 new Photos <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																			
																			<li>
																			  <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				  <h4 class="timeline-title"><a href="profile.php">Mohammad Shahid</a></h4>
																				</div>
																				<div class="timeline-body">
																				   <p class="time">15 Minutes ago</p>
																				  <p>Uploaded 2 new Photos <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																		</ul>
																		<div class="clearfix"></div>		
																</div>
																</div>
																<!--/map-->
															<div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle two">My Office </h3>
																<div class="main-grid3 map">
	
																			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14389.465026187174!2d81.77660036012978!3d25.448986594602083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acb683cb2a637%3A0xc00e59d4cfda08d2!2sDhoomanganj%2C+Allahabad%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1523692013709" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
																							<div class="gmap-info">
																									<h4> <i class="fa fa-map-marker"></i> <b><a href="#" class="text-dark">Gumshuda</a></b></h4>
																									<p>No. 3,Honey Infinity - Tower, </p>
																									 <p>E 3rd, 4th, and 5th Floors</p>
																									<p>Mumbai, India</p>
																							</div>
																	
																</div>
																	
																	
																	<!--//map-->
															</div>
																<div class="clearfix"></div>
														</div>
															
											 	
							</div>
								
													
										
									 <?php include('include/footer.php');?>
		</div>
	</div>
			
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