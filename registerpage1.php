<?php
	session_start();    //initialized session
	if( isset($_SESSION['user'])!="" ){ 
		 header("Location: welcome.php");  //direct to welcome page
	}
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');   //get headerlogout if user logged in
	}
	else{
		include ('header.html');     //get header if user do not logged in
	}
?>
<?php
	error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE );    
	$con = mysqli_connect("127.0.0.1", "root", "", "user_data");
	if (!$con){
		die("Could not connect: " . mysqli_connect_error());
	}
	if(isset($_POST['submitted'])){
		
		$username=trim($_POST['username']);  //strip whitespace from the string
		$email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);
		$day = trim($_POST['day']);
		$month = trim($_POST['month']);
		$year = trim($_POST['year']);
		
		$username=strip_tags($_POST['username']); //strip the string
		$email=strip_tags($_POST['email']);
		$password=strip_tags($_POST['password']);
		$confirmpassword = strip_tags($_POST['confirmpassword']);
		$day = strip_tags($_POST['day']);
		$month = strip_tags($_POST['month']);
		$year = strip_tags($_POST['year']);
		
		
		$pass = password_hash($password, PASSWORD_DEFAULT);  //set up the encrypted password 
		
		// check email exist or not
		$query = "SELECT email FROM register WHERE email='$email'";  //'select' query is used to select certain table
		$result = mysqli_query($con,$query);   //connect to database to send query
		 
		$count = mysqli_num_rows($result); // if email not found then proceed
		 
		if($count==0)
		{
			//'insert' query used to insert the selected categories with the values
			$sql=("INSERT INTO register (register_id, username, email, password, confirmpassword, day, month, year, Type, user_level)Values('', '$username', '$email', '$pass', '$confirmpassword', '$day', '$month', '$year', 'a', '2')");
		
			$res=mysqli_query($con,$sql); //connect to database to send query
			if($res){
				$errTyp = "success";
			    $errMSG = "successfully registered, you may login now";
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later..."; 
			} 
			   
		} else {
			$errTyp = "warning";
			$errMSG = "Sorry Email already in use ...";
		}
	}
		
?>

	
		<style>
		body {
			background: #202020;
			height: 100%;
		}
		.register {
		  margin-top: 150px;
		  width: 100%;
		  height: 100%;
		}
		.register-heading {
		  font: 1.8em/48px "Tenor Sans", sans-serif;
		  color: white;
		  margin-bottom: -15px;
		}
		.register-headingsub {
		  font: 1.2em "Tenor Sans", sans-serif;
		  color: #848484;
		}

		.input-txt {
		  width: 100%;
		  padding: 5px 5px;
		  background: #188AE2;
		  border: none;
		  font-size: 1em;
		  color: white;
		  border-bottom: 1px dotted rgba(250, 250, 250, 0.4);
		  -moz-box-sizing: border-box;
		  -webkit-box-sizing: border-box;
		  box-sizing: border-box;
		  -moz-transition: background-color 0.5s ease-in-out;
		  -o-transition: background-color 0.5s ease-in-out;
		  -webkit-transition: background-color 0.5s ease-in-out;
		  transition: background-color 0.5s ease-in-out;
		}
		.input-txt:-moz-placeholder {
		  color: #ABD1EE;
		}
		.input-txt:-ms-input-placeholder {
		  color: #ABD1EE;
		}
		.input-txt::-webkit-input-placeholder {
		  color: #ABD1EE;
		}
		.input-txt:focus {
		  background-color: #1564A0;
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
		  border-radius: 5px;
		  background: #188AE2;
		  color: #ABD1EE;
		}

		.btn--right {
		  float: right;
		}

		.icon {
		  display: inline-block;
		}

		.icon--min {
		  font-size: .9em;
		}

		.lnk {
		  font-size: .8em;
		  line-height: 3em;
		  color: white;
		  text-decoration: none;
		}
	</style>
		<div class="container">
			<div class="register">
			<div class="panel panel-default">
				<div class="panel-heading">Registration</div>
				<div class="panel-body">
					<form id="registration-form" method="post" autocomplete="off" class="form-horizontal" action="">
						 <?php
						   if ( isset($errMSG) ) {	
						 ?>
						<div class="form-group">
							<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
								<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
							</div>
						</div>
						 <?php
						   }
						 ?>
						<div class="form-group">
							<label class="col-md-2 control-label" for="username" style="padding-top: 7;">Username</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="username" name="username" placeholder="Your username" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" for="email" style="padding-top: 7px;">Email Address</label>
							<div class="col-md-4">
								<input type="email" class="form-control" id="email" name="email" placeholder="Your email address" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" for="password" style="padding-top: 7px;">Password</label>
							<div class="col-md-4">
								<input type="password" class="form-control" id="password" name="pass" placeholder="Password" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" for="confirmpassword" style="padding-top: 6px;">Confirm Password</label>
							<div class="col-md-4">
								<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" />	
							</div>
						</div>					
						<div class="form-group">
							<label class="col-md-2 control-label" for="date" style="padding-top: 0;">Date Of Birth</label>
							<div class="col-md-4">
								<select name="day">
								<option value="">Day</option>
								<?php
									//print 31 days
									for($d = 1; $d<=31; $d++){
										echo '<option value="'.$d.'">'.$d.'</option>\n';
									}
								?>
								</select>
								<select name="month"><option value="">Month</option>
									<option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option>
									<option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
								</select>
								<select name="year">
								<option value="">Year</option>
								<?php
									//print years
									for($y = 1900; $y<=2016; $y++){
										echo '<option value="'.$y.'">'.$y.'</option>\n';
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-2">
								<button type="submit" name="submitted" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
					<!--
					<div id="confirmation" class="alert alert-success hidden">
						<span class="glyphicon glyphicon-star"></span> Thank you for registering
					</div>
					-->
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
	<script type="text/javascript">
		$(document).ready(function () {
			var validator = $("#registration-form").bootstrapValidator({
				feedbackIcons: {
					valid: "glyphicon glyphicon-ok",
					invalid: "glyphicon glyphicon-remove", 
					validating: "glyphicon glyphicon-refresh"
				}, 
				exclude: ':disabled',
				fields : {
					username :{
						message : "Username is required",
						validators : {
							notEmpty : {
								message : "Please provide a username"
							}
						}						
					}, 
					email :{
						message : "Email address is required",
						validators : {
							notEmpty : {
								message : "Please provide an email address"
							}, 
							stringLength: {
								min : 6, 
								max: 35,
								message: "Email address must be between 6 and 35 characters long"
							},
							emailAddress: {
								message: "Email address was invalid"
							}
						}
					}, 
					pass : {
						validators: {
							notEmpty : {
								message : "Password is required"
							},
							stringLength : {
								min: 8,
								message: "Password must be 8 characters long"
							}, 
							different : {
								field : "email", 
								message: "Email address and password can not match"
							}
						}
					}, 
					confirmpassword : {
						validators: {
							notEmpty : {
								message: "Confirm password field is required"
							}, 
							identical : {
								field: "pass", 
								message : "Password and confirmation must match"
							}
						}
					}, 
					day : {
						validators : {
							callback : {
								message: "Day must be selected",
								callback: function(value, validator, $field) {
                                /* Get the selected options */
                                var options = validator.getFieldElements('day').val();
                                return (options != null && options.length >= 2 && options.length <= 31);
								}
							}
						}
					},
					month : {
						validators : {
							notEmpty :{
								message: "Month must be selected",
								
							}
						}
					},
					year : {
						validators : {
							lessThan : {
								value: 2009,
								message: "Your age is not fulfill the requirement"
							},
							callback :{
								message: "Year must be selected",
								callback: function(value, validator, $field) {
                                /* Get the selected options */
                                var options = validator.getFieldElements('year').val();
                                return (options != null && options.length >= 2 && options.length <= 117);
								}
							}
						}
					}
				}
			})
			/*
			validator.on("success.form.bv", function (e) {
				e.preventDefault();
				$("#registration-form").addClass("hidden");
				$("#confirmation").removeClass("hidden");
			});*/
			
		});
	</script>
</html>