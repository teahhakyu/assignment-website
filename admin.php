<?php
	ob_start();
	session_start();
	$con = mysqli_connect("127.0.0.1", "root", "", "user_data");
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');
	}
	else{
		include ('header.html');
	}
	if($_SESSION['user_level'] != 1){
		header("location: welcome.php");
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
	
	
?>
<style>
.admin-table{
	font-size: 30px;
}
.admin-table{
	font-size: 20px;
}
</style>
<div id="fh5co-content-section">
<div class="container">
<div class="col-md-8 col-md-offset-5 animate-box">
	<p><h1>Admin Panel</h1></p>
	
</div>
<div class="col-md-8 col-md-offset-5 animate-box">
<p><a style="font-size: 30px; padding: 5px;" href= "admin.php?type=user">User Settings</a></p>
	<p><table class="admin-table">
	<th><tr>
		<td width="100px" style="background:#cccccc; font-size: 25px; padding: 5px;">User</td>
		<td width="100px" style="background:#cccccc; font-size: 25px; padding: 5px;">Options</td>
	</tr></th>
	
	<?php
	$list_query = mysqli_query($con, 'SELECT register_id, username, Type FROM register');
	while($run_list = mysqli_fetch_array($list_query)){
		$uid = $run_list['register_id'];
		$uname = $run_list['username'];
		$utype = $run_list['Type'];
	?>
	<tr>
		<td style="font-size: 20px; padding: 5px;"><?php echo $uname ?></td>
		<td><?php 
	if($utype == "a"){
		echo "<a style='font-size: 20px; padding: 5px; text-decoration: underline' href='option.php?uid=$uid&type=$utype'>Deactivate</a>";
	} else {
		echo "<a style='font-size: 20px; padding: 5px; text-decoration: underline' href='option.php?uid=$uid&type=$utype'>Activate</a>";
	}
	?></tr>
	<?php
	}
	?>
	<tr><td>
	<?php
		if($uid==1){
			echo 'Admin cannot be deactivate';
	}?>
	</td></tr>
	</table></p>
	</div>
	</div>
	</div>
<?php 
	require("footer.html");
?>