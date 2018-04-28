<html>

<head>
	<title>recover gallery</title>
	<?php include('tag.php');?>
</head>

<body>
<!--/gallery-->
<?php include('include/header.php')?>
	<div class="banner_bottom proj" id="gallery">
		<div class="wrap_view">
			<h3 class="tittle_w3_agileinfo"><br/><h1><font size="20"color="Green">Sighting's Gallery</font></h1></h3>
			<div class="inner_sec_info_w3layouts">
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">All</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Male</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Female</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Other</a>
					</li>
					
				</ul>


				<ul class="portfolio-area">
				<?php 
				require_once('include/config.php');
				$qs="select * from sighting where gender='male'";
				$data=mysql_query($qs)or die(mysql_error());
				while($row=mysql_fetch_array($data))
				{
				?>

					<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
						<div>
							<span class="image-block">
							
									<img style="width:250px;height:300px" src="sight_upload/<?php echo $row['mpic']; ?>" class="img-responsive" alt="Relief">

								</a>
							</span>
						</div>
					</li>
				<?php } ?>
						
				<?php 
				require_once('include/config.php');
				$qs="select * from sighting where gender='female'";
				$data=mysql_query($qs)or die(mysql_error());
				while($row=mysql_fetch_array($data))
				{
				?>
					<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
						<div>
							<span class="image-block">
								

									<img style="width:250px;height:300px" src="sight_a_child/upload/<?php echo $row['mpic']; ?>"  class="img-responsive" alt="Relief">

							
							</span>
						</div>
					</li>
			<?php } ?>
				<?php 
				require_once('include/config.php');
				$qs="select * from sighting where gender='other'";
				$data=mysql_query($qs)or die(mysql_error());
				while($row=mysql_fetch_array($data))
				{
				?>
					<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
						<div>
							<span class="image-block">
						

									<img style="width:250px;height:300px" src="sight_a_child/upload/<?php echo $row['mpic']; ?>" class="img-responsive" alt="Relief">

							
							</span>
						</div>
					</li>
					
				<?php } ?>


					<div class="clearfix"> </div>
				</ul>
				<!--end portfolio-area -->
			</div>
		</div>
	</div>


	<!--//gallery-->
		<?php include('include/footer.php')?>


	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>