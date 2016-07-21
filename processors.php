<?php
	session_start();   //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');  //get headerlogout if user logged in
	}
	else{
		include ('header.html');    //get header if user do not logged in
	}
?>
			<div id="fh5co-processor-section">
			<div class="container">
			<div class="row">
				<div class="header">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>CPU</h3>
					</div>
				</div>
			</div>
			</div>
			<div class="container-processor">
				<div class="row">
				<?php
					$mysql_host = "127.0.0.1";
					$mysql_user = "root";
					$mysql_pass = "";
					$mysql_db = "user_data";
					
					$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);  //established database connection
					
					if($con -> connect_error){    //if database connection failed it will output error message
						die("Connection failed: " . $con -> connect_error);
					}
					
					$query = "SELECT * FROM processor WHERE processor_categories = 'process' ";   //'select' query is used to select certain table
					
					$result = $con -> query($query);   //connected with database to send query
					
					if($result->num_rows > 0){   //the result will more than 0 if it is found from the table
						while($row = $result->fetch_assoc()){    //get the row from the table
							echo'<div class="processor-col animate-box">';
								echo'<img src="processor'.$row["processor_id"].'.jpg" width="250px" height="250px">';
								echo'<span class="text-content" onclick="myFunction'.$row["processor_id"].'()"><span>'.$row["processor_name"].' <br /> Click to view specification</span></span>';
							echo'</div>';
							echo'<div class="modal" id="myModal'.$row["processor_id"].'">';
								echo'<div class="modal-content">';
									echo'<span class="close'.$row["processor_id"].'">x</span>';
									echo'<table id="processor-table-no-border" cellspacing="0" cellpadding="0">';
										echo'<thead>';
											echo'<tr><th colspan="2">Technical Specification</th></tr>';
										echo'</thead>';
										echo'<tbody>';
											echo'<tr>';
												echo'<td><strong>Processor Number</strong></td>';
													echo'<td>'.$row["processor_name"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Socket Compatibility</strong></td>';
												echo'<td>'.$row["processor_socket"].'</td>';
												echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Cache</strong></td> ';
												echo'<td>'.$row["processor_cache"].'</td> ';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Cores</strong></td>';
												echo'<td>'.$row["processor_cores"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Threads<strong></td>';
												echo'<td>'.$row["processor_threads"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Processor Base Frequency</strong></td>	';
												echo'<td>'.$row["processor_pbf"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Max Turbo Frequency</strong></td>';
												echo'<td>'.$row["processor_mtf"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>TDP</strong></td>';
												echo'<td>'.$row["processor_tdp"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Max Memory Size</strong></td>';
												echo'<td>'.$row["processor_mms"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Processor Graphics</strong></td>';
												echo'<td>'.$row["processor_pg"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Graphics Base Frequency</strong></td>';
												echo'<td>'.$row["processor_gbf"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Graphics Max Dynamic Frequency</strong></td>';						
												echo'<td>'.$row["processor_gmdf"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Multiple Displays</strong></td>';
												echo'<td>'.$row["processor_md"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>PCI Express Revision</strong></td>';
												echo'<td>'.$row["processor_per"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>PCI Express Configurations</strong></td>';
												echo'<td>'.$row["processor_pec"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Max # of PCI Express Lanes</strong></td>';
												echo'<td>'.$row["processor_mpl"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Overclocked Clock Speed</strong></td>';
												echo'<td>'.$row["processor_ocs"].'</td>';
											echo'</tr>';
											echo'<tr>';
												echo'<td><strong>Overclocked Clock Speed(water)</strong></td>';
												echo'<td>'.$row["processor_ocsw"].'</td>';
											echo'</tr>';
										echo'</tbody>';
									echo'</table>';
								echo'</div>';
							echo'</div>';
						}
					}else {
						echo '<b>Benchmark list cannot found !</b>';
					}
				?>
					</div>
				</div>
		</div>
		<script>
		// Get the modal
		var modal1 = document.getElementById('myModal1');
		var modal2 = document.getElementById('myModal2');
		var modal3 = document.getElementById('myModal3');
		var modal4 = document.getElementById('myModal4');
		var modal5 = document.getElementById('myModal5');
		var modal6 = document.getElementById('myModal6');
		var modal7 = document.getElementById('myModal7');
		var modal8 = document.getElementById('myModal8');
		var modal9 = document.getElementById('myModal9');
		// Get the button that opens the modal
		//var btn1 = document.getElementById("myBtn");
		
		// Get the <span> element that closes the modal
		var span1 = document.getElementsByClassName("close1")[0];
		var span2 = document.getElementsByClassName("close2")[0];
		var span3 = document.getElementsByClassName("close3")[0];
		var span4 = document.getElementsByClassName("close4")[0];
		var span5 = document.getElementsByClassName("close5")[0];
		var span6 = document.getElementsByClassName("close6")[0];
		var span7 = document.getElementsByClassName("close7")[0];
		var span8 = document.getElementsByClassName("close8")[0];
		var span9 = document.getElementsByClassName("close9")[0];
		// When the user clicks the button, open the modal
		function myFunction1(){
			modal1.style.display = "block";
		}
		function myFunction2(){
			modal2.style.display = "block";
		}
		function myFunction3(){
			modal3.style.display = "block";
		}
		function myFunction4(){
			modal4.style.display = "block";
		}
		function myFunction5(){
			modal5.style.display = "block";
		}
		function myFunction6(){
			modal6.style.display = "block";
		}
		function myFunction7(){
			modal7.style.display = "block";
		}
		function myFunction8(){
			modal8.style.display = "block";
		}
		function myFunction9(){
			modal9.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span1.onclick = function() {
			modal1.style.display = "none";
		}
		span2.onclick = function() {
			modal2.style.display = "none";
		}
		span3.onclick = function() {
			modal3.style.display = "none";
		}
		span4.onclick = function() {
			modal4.style.display = "none";
		}
		span5.onclick = function() {
			modal5.style.display = "none";
		}
		span6.onclick = function() {
			modal6.style.display = "none";
		}
		span7.onclick = function() {
			modal7.style.display = "none";
		}
		span8.onclick = function() {
			modal8.style.display = "none";
		}
		span9.onclick = function() {
			modal9.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal1) {
				modal1.style.display = "none";
			}else if(event.target == modal2) {
				modal2.style.display = "none";
			}else if(event.target == modal3) {
				modal3.style.display = "none";
			}else if(event.target == modal4) {
				modal4.style.display = "none";
			}else if(event.target == modal5) {
				modal5.style.display = "none";
			}else if(event.target == modal6) {
				modal6.style.display = "none";
			}else if(event.target == modal7) {
				modal7.style.display = "none";
			}else if(event.target == modal8) {
				modal8.style.display = "none";
			}else if(event.target == modal9) {
				modal9.style.display = "none";
			}
			
		}
		
	</script>
<?php
	require("footer.html");
?>