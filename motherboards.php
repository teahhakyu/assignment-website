<?php
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');
	}
	else{
		include ('header.html');
	}
?>
		<div id="fh5co-motherboard-section">
			<div class="container">
			<div class="row">
				<div class="motherboard-header">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Motherboard</h3>
					</div>
				</div>
			</div>
			</div>
		
		<div id="fh5co-motherboard">
		<div class="container">
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 0, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<p><img src="asrock X99 oc formula motherboard' . $row["motherboard_id"] . '.png" width="400px" height="500px" onclick="window.open(this.src)" alt="asrock X99 oc formula motherboard"></p>';
									
									echo '<p><img src="asrock X99 oc formula motherboard1' . $row["motherboard_id"] . '.jpg" width="400px" height="110px" onclick="window.open(this.src)" alt="asrock X99 oc formula rear view"></p>';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
						<!--<p><img src="asrock X99 oc formula motherboard.png" width="400px" height="500px" alt=""></p>
						<p><img src="asrock X99 oc formula motherboard2.jpg" width="400px" height="110px" alt=""></p>-->
						
						
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Asrock X99 OC Formula motherboard</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft" style="height: 1080px;">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Video Outputs: </strong></p>
						<p style="padding-bottom: 25px"><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 55px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 81px"><strong>Onboard Storage: </strong></p>
						<p style="padding-bottom: 81px"><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 405px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						
						<?php
									$mysql_host = "127.0.0.1";
									$mysql_user = "root";
									$mysql_pass = "";
									$mysql_db = "user_data";
									
									$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
									if($con -> connect_error){
										die("Connection failed: " . $con -> connect_error);
									}
									
									$query = "SELECT * FROM motherboard LIMIT 0, 1";
									
									$result = $con -> query($query);
									
									if($row = $result->fetch_assoc()){
										echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
										//echo '<p>'.$row["USB_31"].'</p>';
										echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
										echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
									}	
								?>	
						</div>
						</div>
					</div>
				</div>
			
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 1, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="ASUS A88X Pro motherboard' . $row["motherboard_id"] . '.png" width="400px" height="500px" onclick="window.open(this.src)" alt="ASUS A88X Pro motherboard">';
									echo '<img src="ASUS A88X Pro motherboard2' . $row["motherboard_id"] . '.jpg" width="400px" height="360px" onclick="window.open(this.src)" alt="ASUS A88X Pro motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="ASUS A88X Pro motherboard.png" width="400px" height="500px" alt=""></p>
						<p><img src="ASUS A88X Pro motherboard2.jpg" width="400px" height="360px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>ASUS A88X Pro</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Onboard Video: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 81px"><strong>Expansion Slots: </strong></p>
						<p><strong>Onboard Storage: </strong></p>
						<p><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 377px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 1, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								//echo '<p>'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 2, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="asus maximus VIII extreme motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="asus maximus VIII extreme motherboard">';
									echo '<img src="asus maximus VIII extreme motherboard3' . $row["motherboard_id"] . '.jpg" width="360px" height="170px" onclick="window.open(this.src)" alt="asus maximus VIII extreme motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="asus maximus VIII extreme motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="asus maximus VIII extreme motherboard2.jpg" width="360px" height="170px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Asus MAXIMUS VIII extreme</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Onboard Video: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p style="padding-bottom: 55px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 81px"><strong>Onboard Storage: </strong></p>
						<p><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 25px"><strong>USB 3.1: </strong></p>
						<p style="padding-bottom: 675px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 2, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								//echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["USB_3"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 3, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="asus maximus VIII formula motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="asus maximus VIII formula motherboard">';
									echo '<img src="asus maximus VIII formula motherboard4' . $row["motherboard_id"] . '.jpg" width="400px" height="330px" onclick="window.open(this.src)" alt="asus maximus VIII formula motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="asus maximus VIII formula motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="asus maximus VIII formula motherboard2.jpg" width="400px" height="330px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Asus MAXIMUS VIII Formula</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 81px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 55px"><strong>Onboard Storage: </strong></p>
						<p><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 25px"><strong>USB 3.1: </strong></p>
						<p style="padding-bottom: 432px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 3, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								//echo '<p>'.$row["video_outputs"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["USB_3"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 4, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="asus z170pro motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="asus z170pro motherboard">';
									echo '<img src="asus z170pro motherboard5' . $row["motherboard_id"] . '.jpg" width="400px" height="100px" onclick="window.open(this.src)" alt="asus z170pro motherboard Pro motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="asus z170pro motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="asus z170pro motherboard2.jpg" width="430px" height="100px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Asus Z170 Pro Gaming</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Video Outputs: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 51px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 55px"><strong>Onboard Storage: </strong></p>
						<p style="padding-bottom: 27px"><strong>USB 3.0: </strong></p>
						<p><strong>USB 3.1: </strong></p>
						<p style="padding-bottom: 354px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 4, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["USB_31"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["Onboard"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 5, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="GA z97 gaming 1 sniper motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="GIGABYTE z97 gaming 1 sniper motherboard">';
									echo '<img src="GA z97 gaming 1 sniper motherboard6' . $row["motherboard_id"] . '.png" width="400px" height="250px" onclick="window.open(this.src)" alt="GIGABYTE z97 gaming 1 sniper motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="GA z97 gaming 1 sniper motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="GA z97 gaming 1 sniper motherboard2.png" width="400px" height="250px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Gigabyte Z97 Gaming 1 Sniper</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p style="padding-bottom: 25px"><strong>Video Outputs: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 81px"><strong>Expansion Slots: </strong></p>
						<p><strong>Onboard Storage: </strong></p>
						<p style="padding-bottom: 29px"><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 324px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 5, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								//echo '<p>'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 6, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="GA Z97X SOCF motherboard' . $row["motherboard_id"] . '.png" width="400px" height="500px" onclick="window.open(this.src)" alt="GIGABYTE Z97X SOCF motherboard">';
									echo '<img src="GA Z97X SOCF motherboard7' . $row["motherboard_id"] . '.png" width="400px" height="140px" onclick="window.open(this.src)" alt="GIGABYTE Z97X SOCF motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="GA Z97X SOCF motherboard.png" width="400px" height="500px" alt=""></p>
						<p><img src="GA Z97X SOCF motherboard2.png" width="400px" height="140px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Gigabyte Z97X SOC</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Video Outputs: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 55px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 25px"><strong>Onboard Storage: </strong></p>
						<p><strong>USB 3.0: </strong></p>
						<p style="padding-bottom:837px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 6, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								//echo '<p>'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 7, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="GA Z170X Gaming 7 motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="GIGABYTE Z170X Gaming 7 motherboard">';
									echo '<img src="GA Z170X Gaming 7 motherboard8' . $row["motherboard_id"] . '.png" width="400px" height="210px" onclick="window.open(this.src)" alt="GIGABYTE Z170X Gaming 7 motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="GA Z170X Gaming 7 motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="GA Z170X Gaming 7 motherboard2.png" width="400px" height="210px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Gigabyte Z170X Gaming 7</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Video Outputs: </strong></p>
						<p style="padding-bottom: 25px"><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 81px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 81px"><strong>Onboard Storage: </strong></p>
						<p><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 29px"><strong>USB 3.1: </strong></p>
						<p style="padding-bottom: 485px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 7, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["USB_31"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["Onboard"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 8, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="msi z170a xpower gaming titanium motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="msi z170a xpower gaming titanium motherboard">';
									echo '<img src="msi z170a xpower gaming titanium motherboard9' . $row["motherboard_id"] . '.jpg" width="400px" height="130px" onclick="window.open(this.src)" alt="msi z170a xpower gaming titanium motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="msi z170a xpower gaming titanium motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="msi z170a xpower gaming titanium motherboard2.jpg" width="430px" height="130px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>MSI Z170A Xpower Gaming Titanium</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p style="padding-bottom:81px"><strong>Onboard Video: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 26px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 55px"><strong>Onboard Storage: </strong></p>
						<p><strong>USB 2.0: </strong></p>
						<p style="padding-bottom: 26px"><strong>USB 3.1: </strong></p>
						<p style="padding-bottom: 460px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 8, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["USB_31"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["Onboard"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
				<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
					<?php
							//Declaring MySQL authentication credentials
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
							
							//Create MySQL connection
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
							// Check MySQL connection
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query_1 = "SELECT * FROM motherboard LIMIT 9, 1";
									
							$result_1 = $con->query($query_1);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									echo '<img src="asrock z97 extreme motherboard' . $row["motherboard_id"] . '.jpg" width="400px" height="500px" onclick="window.open(this.src)" alt="asrock z97 extreme motherboard">';
									echo '<img src="asrock z97 extreme motherboard10' . $row["motherboard_id"] . '.jpg" width="400px" height="100px" onclick="window.open(this.src)" alt="asrock z97 extreme motherboard rear view">';
								}
							}else {
								echo '<b>Image not found !</b>';
							}
					?>
					<!--<p><img src="asrock z97 extreme motherboard.jpg" width="400px" height="500px" alt=""></p>
						<p><img src="asrock z97 extreme motherboard2.jpg" width="430px" height="100px" alt=""></p>
					-->
					</div>
					<div class="col-md-6 col-md-push-2">
						<h2>Asrock Z97 extreme6</h2>
						<h3>Product Specification</h3>
						<div class="colspan-table">
						<div class="colspan-tableleft">
						<p><strong>Price: </strong></p>
						<p><strong>Size: </strong></p>
						<p><strong>CPU Interface: </strong></p>
						<p><strong>Chipset: </strong></p>
						<p><strong>Memory Slots: </strong></p>
						<p><strong>Onboard Video Chipset: </strong></p>
						<p><strong>Network Connectivity: </strong></p>
						<p><strong>Onboard Audio: </strong></p>
						<p style="padding-bottom: 81px"><strong>Expansion Slots: </strong></p>
						<p style="padding-bottom: 81px"><strong>Onboard Storage: </strong></p>
						<p style="padding-bottom: 28px"><strong>USB 3.0: </strong></p>
						<p style="padding-bottom: 405px"><strong>Onboard: </strong></p>
						<p><strong>Power Connectors: </strong></p>
						</div>
						<div class="colspan-tableright">
						<?php
							$mysql_host = "127.0.0.1";
							$mysql_user = "root";
							$mysql_pass = "";
							$mysql_db = "user_data";
									
							$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
									
							if($con -> connect_error){
								die("Connection failed: " . $con -> connect_error);
							}
									
							$query = "SELECT * FROM motherboard LIMIT 9, 1";
									
							$result = $con -> query($query);
									
							if($row = $result->fetch_assoc()){
								echo '<p style="background:#D3D3D3">'.$row["price"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["size"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["interface"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["chipset"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["memory_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["video_outputs"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["network_connectivity"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_audio"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["expansion_slots"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["onboard_storage"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["USB_3"].'</p>';
								//echo '<p>'.$row["USB_31"].'</p>';
								echo '<p style="background:#FFE4C4">'.$row["Onboard"].'</p>';
								echo '<p style="background:#D3D3D3">'.$row["power_connectors"].'</p>';
							}
									
									
						?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	require("footer.html");
?>