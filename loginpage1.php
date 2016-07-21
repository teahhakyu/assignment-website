<?php
	ob_start();
	session_start();   //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');   //get headerlogout if user logged in
	}
	else{
		include ('header.html');   //get header if user do not logged in
	}
?>
<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "user_data");   // established the database connections 
	if (isset($_POST['submitted'])) {
		$email=$_POST['mail'];
		$password=$_POST['pass'];
		
		// To protect MySQL injection for Security purpose
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysqli_real_escape_string($con,$_POST['mail']);
		$password = mysqli_real_escape_string($con,$_POST['pass']);
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = "SELECT * FROM register WHERE email='$email'";
		
		$result = mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		//$count = mysqli_num_rows($result);
		if (password_hash($password, PASSWORD_DEFAULT)){
			$_SESSION['loggedin'] = time(); //log in time 
			$_SESSION['email']=$row['email']; //set session email from database 
			$_SESSION['user']=$row['register_id'];
			$_SESSION['username']=$row['username'];
			$_SESSION['type']=$row['Type'];
			
			$message='Your account is deactivated by the site Admin';
			$messagefail='You can login to your account!';
			if ($_SESSION['type']=='d'){
				echo'<p style="padding-top:100px;margin-bottom:-50px">Your account is deactivated by the site Admin</p>';
				session_destroy();
			}else{
				echo'You can login to your account!';
				header('Location: welcome.php'); // Redirecting To Other Page
			}
			
		}else {
			$errMSG = "Invalid email and password, Try again...";
		}
	}
?>
	
	<style type="text/css">
		body {
			background: #202020;
			height: 100%;
		}
		.login {
		  margin-top: 150px;
		  width: 100%;
		  height: 100%;
		}

		.login-heading {
		  font: 1.8em/48px "Tenor Sans", sans-serif;
		  color: white;
		  margin-bottom: -15px;
		}
		.login-headingsub {
		  font: 1.2em "Tenor Sans", sans-serif;
		  color: #848484;
		  margin-bottom: 0;
		}
		.login-footer {
		  margin: 10px 0;
		  overlow: hidden;
		  float: left;
		  width: 100%;
		}
		.btn {
		  padding: 15px 30px;
		  border: none;
		  background: #188AE2;
		  color: #ABD1EE;
		}

	</style>
		<div class="container">
		<div class="login">
		<div class="panel panel-default">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
			
				<form id="login-form" method="post" class="form-horizontal" autocomplete="off">
					<?php
						if ( isset($errMSG) ) {
					?>
					<div class="form-group">
						<div class="alert alert-danger">
							<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
						</div>
					</div>
					<?php
					}
				    ?>
					<div class="form-group">
						<label class="col-md-2 control-label" for="email">Email Address</label>
						<div class="col-md-4">
							<input type="email" class="form-control" id="email" name="mail" placeholder="Your email address" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="password">Password</label>
						<div class="col-md-4">
							<input type="password" class="form-control" id="password" name="pass" placeholder="Password" required/>
						</div>
					</div>				
					<div class="form-group">
						<div class="col-md-6 col-md-offset-2">
							<button type="submit" name="submitted" class="btn btn-success">Login</button>
						</div>
					</div>
					<div class="form-group">
						<a style="font-size: 20px; color:#A9A9A9; padding-left:50px; text-decoration:underline" href="registerpage1.php">Sign Up Here...</a>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright 2016 Xtreme. All Rights Reserved. <span>We recommend using IE8 above browser.</span></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	</div>

		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="js/google_map.js"></script>
		<!-- Main JS (Do not remove) -->
		<script src="js/main.js"></script>
	</body>
	
</html>