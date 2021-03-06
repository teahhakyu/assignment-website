<?php
	session_start();   //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php'); //get headerlogout if user logged in
	}
	else{
		include ('header.html'); //get header if user do not logged in
	}
?>
		<div id="wrapper-table">
			<div class="header">
				<h1>Display card benchmark</h1>
			</div>
			<table id="table-no-border" cellspacing="0" cellpadding="0">
				<thead><tr>
					<th style="width: 40%">User Rating</th>
					<th>Value</th>
					<th>Effective 3D Speed</th>
					<th>Market Share</th>
					<th>MRender</th>
					<th>Age</th>
					<th>Price</th>
				</tr></thead>
				<tbody>				
				<?php
					$mysql_host = "127.0.0.1";  //hostname
					$mysql_user = "root";      //username
					$mysql_pass = "";          //password
					$mysql_db = "user_data";    //database
					
					$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db); //established database connection
					
					if($con -> connect_error){        //if database connection failed it will output error message
						die("Connection failed: " . $con -> connect_error);
					}
					
					$query = "SELECT * FROM displaycard WHERE displaycard_categories = 'graphic' ";  //'select' query is used to select certain table
					
					$result = $con -> query($query); //connected with database to send query
					
					if($result->num_rows > 0){   //the result will more than 0 if it is found from the table
						while($row = $result->fetch_assoc()){  //get the row from the table
							echo '<tr><td><div class="columnspan"><div class="columnspanleft">';
							echo '<p>&nbsp&nbsp'.$row['displaycard_id'].'<br />'.$row['displaycard_ur'].'</p>';
							echo '</div><div class="columnspanright">';
							echo '<p>'.$row["displaycard_name"].'&nbsp&nbsp&nbsp <img src="displaycard'.$row["displaycard_id"].'.jpg" alt="" height="75" width="40"></p>';
							echo '<p><span>'.$row["displaycard_details"].'</span></p>';
							echo '</div>
								</div>
							</td>';
							echo '<td>'.$row["displaycard_value"].'</td>';
							echo '<td>'.$row["displaycard_es"].'</td>';
							echo '<td>'.$row["displaycard_ms"].'</td>';		
							echo '<td>'.$row["displaycard_mr"].'</td>';
							
							echo '<td>'.$row["displaycard_age"].'</td>';
							echo '<td>'.$row["displaycard_price"].'</td></tr>';
						}
					}else {
						echo '<b>Benchmark list cannot found !</b>';
					}
				?>
				</tbody>
			</table>
		</div>
<?php
	require("footer.html"); //get footer
?>