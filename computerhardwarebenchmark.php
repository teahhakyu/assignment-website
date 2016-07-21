<?php
	session_start();	//initialized session
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
						<h3>Benchmark categories</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(benchmarklistcpu.jpg);">
							<a class="image-popup text-center" href="CPU.php">
								<div class="prod-title">
									<h3>CPU</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="fh5co-grid animate-box" style="background-image: url(benchmarklistdisplaycards.png);">
							<a class="image-popup text-center" href="displaycards.php">
								<div class="prod-title">
									<h3>Display Cards</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	require("footer.html"); //get footer 
?>