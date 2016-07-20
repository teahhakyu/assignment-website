<?php		
	if (isset($_POST['submitted'])){
				
	$con = mysqli_connect("localhost", "root", "", "user_data");
				
	if(!$con){
		die("Cannot Connect: " . mysqli_error());
	}
				
				
	mysqli_select_db("user_data", $con);

	$sql = "INSERT INTO user_data('name', 'password') VALUES ('$_POST[username]', '$_POST[password]')";
			
	mysqli_query($sql, $con);
				
				
				
	header('Location: welcome.php');
	mysqli_close($con);
	}
?>