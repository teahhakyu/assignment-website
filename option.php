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
	$uid = $_GET['uid'];
	$type = $_GET['type'];
	if($uid == 1){
		header("location: admin.php");
	}
	else{
		if($type == 'a'){
			mysqli_query($con, "UPDATE `register` SET `Type` = 'd' WHERE `register_id`='$uid'");		
			header("location: admin.php?type=user");
		} else if($type == 'd'){
			mysqli_query($con, "UPDATE `register` SET `Type` = 'a' WHERE `register_id`='$uid'");
			header("location: admin.php?type=user");
		}
	}
?>