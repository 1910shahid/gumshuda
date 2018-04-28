<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ad5fab922309d0013d4edb4&product=sticky-share-buttons"></script>

	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3layouts_agileits">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo_wthree_agile">
							<img src="images/gumshuda.png " width="300px" height="90px"/>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<li>
								<a href="dashboard.php">Home</a>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['name'];?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a class="scroll" href="view.php">View Profile</a>
									</li>
									<li>
										<a class="scroll" href="editp.php">Edit Profile</a>
									</li>
									<li>
										<a class="scroll" href="npassword.php">Reset Password</a>
									</li>
									<li>
										<a class="scroll" href="logout.php">Log out</a>
									</li>
								</ul>
							</li>
							<li>
								<br/><img style="width:40px;height:40px;border-radius:20px;" src="upload/<?php echo $row['upic']; ?>"/>
							</li>
							
							
							

						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
		<div class="clearfix"></div>
	</div>