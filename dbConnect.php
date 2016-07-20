<?php

$username = "root";
$password = "";
$hostname = "127.0.0.1"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db($dbhandle,"user_data") 
  or die("Could not select examples");


?>