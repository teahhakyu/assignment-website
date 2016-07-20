<?php
	session_start();
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');
	}
	else{
		include ('header.html');
	}
?>
		<div class="fh5co-hero fh5co-hero-2" id="fh5co-section-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/blog-3.jpg);">
				<div class="desc animate-box">
					<h2>Contact Us</h2>
					<span>XTREME All About Computer Hardware</span>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="thankyou.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>183, lorong lembah lumpur4, Taman lembah lumpur, 36500 Kuala Lumpur, Malaysia</li>
								<li><i class="icon-phone2"></i>010-12345678</li>
								<li><i class="icon-mail"></i><a href="#">hakyuteah@yahoo.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.xtreme.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="contactname" placeholder="Name" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="contactemail" placeholder="Email" required />
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" name="contactmessage" id="" cols="30" rows="7" placeholder="Message" required /></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="submitted" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<!-- END map -->
<?php
	$conn = new mysqli("127.0.0.1", "root", "", "user_data") or die($conn->connect_error);
	$name = $_POST['contactname'];
	$email = $_POST['contactemail'];
	$message = $_POST['contactmessage'];
	$contactname    = mysqli_real_escape_string($conn,$name);
	$contactemail   = mysqli_real_escape_string($conn,$email);
	$contactmessage = mysqli_real_escape_string($conn,$message);
	$query   = "INSERT into contact(contact_name,contact_email,contact_message) 
	VALUES('" . $name . "','" . $email . "','" . $message . "')";
	$success = $conn->query($query);

	if (!$success) {
		die("Couldn't enter data: ".$conn->error);
	}
?>
<?php
	require("footer.html");
?>

