<?php
	session_start();  //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php'); //get headerlogout if user logged in
	}
	else{
		include ('header.html'); //get header if user do not logged in
	}
?>
		<div id="wrapper-table">
			<div class="header">
				<h1>CPU benchmark</h1>
			</div>
			<table id="table-no-border" cellspacing="0" cellpadding="0">
				<thead><tr>
					<th style="width: 40%">User Rating</th>
					<th>Value</th>
					<th>Effective Speed</th>
					<th>Market Share</th>
					<th>SC Mixed</th>
					<th>QC Mixed</th>
					<th>Age</th>
					<th>Price</th>
				</tr></thead>
				<tbody>				
				<?php
					$mysql_host = "127.0.0.1";
					$mysql_user = "root";
					$mysql_pass = "";
					$mysql_db = "user_data";
					
					$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
					
					if($con -> connect_error){
						die("Connection failed: " . $con -> connect_error);
					}
					
					$query = "SELECT * FROM cpu WHERE categories = 'processor' ";
					
					$result = $con -> query($query);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo '<tr><td><div class="columnspan"><div class="columnspanleft">';
							echo '<p>&nbsp&nbsp'.$row['cpu_id'].'<br />'.$row['User_Rating'].'</p>';
							echo '</div><div class="columnspanright">';
					
							echo '<p>'.$row["cpu_name"].'&nbsp&nbsp&nbsp <img src="cpu'.$row["cpu_id"].'.jpg" alt="i5-6600k" height="45" width="60"></p>';
							echo '<p><span>'.$row["cpu_details"].'</span></p>';
							echo '</div>
								</div>
							</td>';
							echo '<td>'.$row["Value"].'</td>';
							echo '<td>'.$row["Effective_Speed"].'</td>';
							echo '<td>'.$row["Market_Share"].'</td>';		
							echo '<td>'.$row["SC_Mixed"].'</td>';
							echo '<td>'.$row["QC_Mixed"].'</td>';
							echo '<td>'.$row["Age"].'</td>';
							echo '<td>'.$row["Price"].'</td></tr>';
						}
					}else {
						echo '<b>Benchmark list cannot found !</b>';
					}
				?>
				</tbody>
			</table>
		</div>
<?php
	require("footer.html");
?>