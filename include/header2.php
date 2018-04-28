<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ad5fab922309d0013d4edb4&product=sticky-share-buttons"></script>

<div class="box">
	<div class="logo"><img src="images/gumshuda.png "/></div>
	<div class="key">
		<a href="registration.php"><img  src="images/lock2.png"/></a>
		<a href="basic_details.php"><img src="images/miss.png"/></a>
		<a href="s_basic_detail.php"><img src="images/eye.png"/></a>
		<a href="quick_search.php"><img src="images/search3.png"/></a>
	</div>
	<div class="hmenu">
		<ul>
			<li><a href="dashboard.php">Home</a></li>
			
			<li><a href="#"><?php echo $row['name'];?></a></li>
								<div class="dropdownhmenu">
									<ul >
										<li>
											<a href="view.php">View Profile</a>
										</li>
										<li>
											<a href="editp.php">Edit Profile</a>
										</li>
										<li>
											<a href="npassword.php">Reset Password</a>
										</li>
										<li>
											<a href="logout.php">Log out</a>
										</li>
									</ul>
								</div>
								
			<li>
				<img style="width:40px;height:40px;border-radius:20px;" src="upload/<?php echo $row['upic']; ?>"</a>
			</li>
		</ul>
	</div>
</div>