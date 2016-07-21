<?php
	session_start(); //initialized session
	if(isset($_SESSION['user'])){        
		include ('headerlogout.php'); //get headerlogout if user logged in
	}
	else{
		include ('header.html'); //get header if user do not logged in
	}
?>
		
		<div id="fh5co-list-section" class="fh5co-section-gray">
			<div class="container">
				<div class="header">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Accessories</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlist1.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Laptops</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlist2.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Monitors</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlist3.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Desktops</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlistdropdown1.jpg);">
							<a class="image-popup text-center" href="processors.php">
								<div class="prod-title">
									<h3>Processors</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlistdropdown2.jpg);">
							<a class="image-popup text-center" href="motherboards.php">
								<div class="prod-title">
									<h3>Motherboards</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlistdropdown3.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Drives</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlistdropdown4.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Memory</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(computerlistdropdown5.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>Cases</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	require("footer.html");   //get footer
?>