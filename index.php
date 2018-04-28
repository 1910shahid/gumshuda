
<html>
<head>
	<?php include('tag.php')?>
	
	
</head>
<body>
	<!-- banner -->
	<?php include('include/header.php')?>
	<div class="banner_top">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				<li data-target="#myCarousel" data-slide-to="4" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="container">
						<div class="carousel-caption">
							<h3><font color="gray">Im</font>Possible</h3>

							<div class="bnr-button">
								<a class="act" href="index.php">Read More</a>
							</div>

						</div>
					</div>
				</div>
				<div class="item item2">
					<div class="container">
						<div class="carousel-caption">
							<h3>Hope is a waking dream.</h3>

							<div class="bnr-button">
								<a class="act" href="index.php">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item item3">
					<div class="container">
						<div class="carousel-caption">
							<h3>A jug fills drop by drop.</h3>

							<div class="bnr-button">
								<a class="act" href="index.php">Read More</a>
							</div>

						</div>
					</div>
				</div>
				<div class="item item4">
					<div class="container">
						<div class="carousel-caption">

							<h3>Never,never,never give up.</h3>

							<div class="bnr-button">
								<a class="act" href="index.php">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item item5">
					<div class="container">
						<div class="carousel-caption">

							<h3>Give Little Helps a lot</h3>

							<div class="bnr-button">
								<a class="act" href="index.php">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//banner -->
	<!--/what-->
	<div class="works" id="services" style="background-image:url(images/hil.jpeg)">
		<div class="container">
			
			<div class="inner_sec_info_w3layouts">
				<div class="ser-first">
					<a href="registration.php">
						<div class="col-md-3 ser-first-grid text-center">
							<img src="images/lock2.png" alt="lock2" width="100px" height="100px"/>	
							<h3>Login/Register</h3>
							<p>please login here</p>
						</div>
					</a>
					<a href="basic_details.php">
						<div class="col-md-3 ser-first-grid text-center">
							<img src="images/miss.png" alt="lock2" width="100px" height="100px"/>		
							<h3>My child is missing</h3>
							<p>Find your Child </p>
						</div>
					</a>
					<a href="s_basic_detail.php">
						<div class="col-md-3 ser-first-grid text-center">
							<img src="images/eye.png" alt="lock2" width="100px" height="100px"/>		
							<h3>I have sighted a child</h3>
							<p>Help me to find His/Her</p>
						</div>
					</a>
					<a href="quick_search.php">
						<div class="col-md-3 ser-first-grid text-center">
							<img src="images/search3.png" alt="lock2" width="100px" height="100px"/>
							<h3>Search a Missing Child</h3>
							<p>Enter The details to find</p>
						</div>
					</a>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--/alert-->
	


	<?php include('include/footer.php')?>
		<script type="text/javascript" src="js/all.js"></script>

	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script type="text/javascript" src="js/all.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<script type="text/javascript" src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () 
		{

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>


	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Important Alert</h4>
      </div>
      <div class="modal-body">
        <p>For assistance, you may contact police at 100 or CHILDLINE 1098.</p>
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
<!--/alert--><script>
$(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>
	
	
	</body>
	</html>
	