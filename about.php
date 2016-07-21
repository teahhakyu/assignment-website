<?php
	session_start();   //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');     //get headerlogout if user logged in
	}
	else{
		include ('header.html');  //get header if user do not logged in
	}
?>
		<div class="fh5co-hero fh5co-hero-2" id="fh5co-section-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/about-image.jpg);">
				<div class="desc animate-box">
					<h2>About Us</h2>
					<span>XTREME All About Computer Hardware</span>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		<div id="fh5co-about">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>About Us</h3>
						<p>Xtreme is run by a small company of hardcore geeks. We are dedicated to providing our visitors with top notch hardware research on PC components. If you have any feedback please contact us using the email link at the bottom of this page. Thank you.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">
						<h3>Our mission is to help you decide smart product to choose.</h3>
						<p>Ever spent hours dodging marketing hype whilst searching the web for impartial reviews? Ever wondered if there was a smarter way of finding top products quickly?</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-about -->
		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>What we do</h3>
						<p>We search for you the right products based on real world performance, user sentiment and current prices.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>How we do it</h3>
						<p>You can search quickly benchmark the components in your PC and compare them to the benchmarks submitted by thousands of other users.</p>
					</div>
				</div>
				<p>Please if you have anymore information you can <a href="contactus2.php">contact us by email.</a> We would love to hear from you.</p>
			</div>
		</div>
		<!-- fh5co-content-section -->
		
		<!-- END fh5co-services-section -->
<?php
	require("footer.html");
?>