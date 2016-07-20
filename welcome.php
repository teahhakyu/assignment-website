<?php
 ob_start();
 session_start();
 $con = mysqli_connect("127.0.0.1", "root", "", "user_data");
 if (!$con){
	die("Could not connect: " . mysqli_connect_error());
}
 if( !isset($_SESSION['user']) ) {
  header("Location: loginpage1.php");
  exit;
 }
 if(isset($_SESSION['user'])) {
	include("headerlogout.php");
 }
 else{
	include("header.html");
 }
function loggedin(){
	if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		return true;
	}else {
		return false;
	}
}
if(loggedin()){
	$my_id = $_SESSION['user'];

	$user_query = mysqli_query($con, "SELECT username, user_level FROM register WHERE register_id='$my_id'");
	$run_user = mysqli_fetch_array($user_query);
	$username = $run_user['username'];
	$user_level = $run_user['user_level']; 
	$query_level = mysqli_query($con, "SELECT name FROM user_level WHERE id='$user_level'");
	$run_level = mysqli_fetch_array($query_level);
	$level_name = $run_level['name'];
	$_SESSION['user_level']=$run_user['user_level'];
}
 // select loggedin users detail
 //$res=mysqli_query($con,"SELECT * FROM register WHERE register_id=".$_SESSION['user']);
 //$userRow=mysqli_fetch_array($res);
?>

<?php
	define('Title', 'Welcome to the XTREME All About Computer Hardware Website!');
?>

<style>
body{
	height: 100%;
}
#fh5co-content-section{
	margin-top: 100px;
}
.admin_btn{
	font-size: 30px;
	background: #000000;
}
.admin_btn:hover{
	background: #9c9c9c;
}
</style>

<?php
	echo '<div id="fh5co-content-section"><div class="container"><div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
	<p><h1> Hi,<span style="font-size:30px; font-weight: bold">'.$username .'</span></h1></p>
	<p><h1>Welcome to the XTREME All About Computer Hardware Website!</h1></p>';
	date_default_timezone_set('America/New_York');
	echo '<p>You logged in as <span style="font-size:20px; font-weight: bold">['.$level_name.']</span></p>';
	?>
<?php
	echo '<p>You have been logged in since: <span style="font-size:20px; font-weight: bold">' . date('g:i a', $_SESSION['loggedin']). '</span></p>';
	
	echo '<p><a href="logout.php" style="text-decoration: underline">Click here to log out.</a></p>';
?>
<p>
<?php
if($user_level==1){
	echo "<p><span style='font-size:30px'>Click here to access  <span class='glyphicon glyphicon-arrow-right'></span>&nbsp&nbsp</span><a href='admin.php' class='admin_btn'>Admin Panel</a></p>";
}
?>
</p>
</div>
</div>
</div>
<?php
	require("footer.html");
?>

