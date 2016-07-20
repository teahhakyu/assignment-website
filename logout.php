<?PHP
session_start();
unset($_SESSION);
session_destroy();
require("header.html");

?>
<?php
	echo '<div id="fh5co-content-section"><div class="container" style="padding-top:100px;"><div class="col-md-8 col-md-offset-2 text-center heading-section animate-box"><h2>You have been logged out!</h2>';
	echo '<p><a href="loginpage1.php">Login Again</a></p></div></div>';
?>

<?php require("footer.html"); ?>