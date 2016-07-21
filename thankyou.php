<?php
	session_start();  //initialized session
	if(isset($_SESSION['user'])){      
		include ('headerlogout.php'); //get headerlogout if user logged in
	}
	else{
		include ('header.html'); //get header if user do not logged in
	}
	echo '<div id="fh5co-content-section"><div class="container" style="padding-top:100px;"><div class="col-md-8 col-md-offset-2 text-center heading-section animate-box"><h2>Thank You For Contacting Us!</h2>';
	echo '<p>Any information will be reply through your email.</p></div></div>';
	require ("footer.html"); //get footer
?>
