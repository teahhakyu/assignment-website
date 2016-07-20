<?php
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');
	}
	else{
		include ('header.html');
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
					$mysql_host = "127.0.0.1";
					$mysql_user = "root";
					$mysql_pass = "";
					$mysql_db = "user_data";
					
					$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
					
					if($con -> connect_error){
						die("Connection failed: " . $con -> connect_error);
					}
					
					$query = "SELECT * FROM displaycard WHERE displaycard_categories = 'graphic' ";
					
					$result = $con -> query($query);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
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
	require("footer.html");
?>