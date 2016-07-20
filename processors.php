<?php
	session_start();
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');
	}
	else{
		include ('header.html');
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
					
					$con = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
					
					if($con -> connect_error){
						die("Connection failed: " . $con -> connect_error);
					}
					
					$query = "SELECT * FROM processor WHERE processor_categories = 'process' ";
					
					$result = $con -> query($query);
					
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
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
						
						<!--
						<div class="processor-col animate-box">
							<img src="i5-6600kProcessor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction2()"><span>Intel Core i5-6600K <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal2">
							<div class="modal-content">
								<span class="close2">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i5-6600K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1151</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>6 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.5 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.9 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>91 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>64 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 530</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.15 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes</strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.56 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.49 Hz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="processor-col animate-box">
							<img src="i7-4790kProcessor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction3()"><span>Intel Core i7-4790K <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal3">
							<div class="modal-content">
								<span class="close3">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i7-4790K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1150</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>8 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>8</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>4 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>4.4 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>88 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>32 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 4600</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.25 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes</strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.66 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.82 Hz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="processor-col animate-box">
							<img src="i5-4690kProcessor.png" width="250px" height="250px">
								<span class="text-content" onclick="myFunction4()"><span>Intel Core i5-4690K <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal4">
							<div class="modal-content">
								<span class="close4">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i5-4690K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1150</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>6 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.5 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.9 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>88 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>32 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 4600</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.2 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes<strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.53 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.58 Hz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="processor-col animate-box">
							<img src="i7-5820kProcessor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction5()"><span>Intel Core i7-5820K <br /> Click to view specification</span></span>
						</div>	
						<div class="modal" id="myModal5">
							<div class="modal-content">
								<span class="close5">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i7-5820K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA2011-3</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td>
											<td>15 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>6</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>12</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.3 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.6 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>140 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>64 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>None</td>	
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes<strong></td>
											<td>28</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.32 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.51 GHz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="processor-col animate-box">
							<img src="i7-4770kProcessor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction6()"><span>Intel Core i7-4770K <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal6">
							<div class="modal-content">
								<span class="close6">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i7-4770K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1150</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td>
											<td>8 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>8</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.5 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.9 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>84 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>32 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 4600</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.25 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes<strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.48 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.53 GHz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="processor-col animate-box">
							<img src="i3-6100Processor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction7()"><span>Intel Core i3-6100 <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal7">
							<div class="modal-content">
								<span class="close7">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i3-6100</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1151</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>3 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>2</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.7 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>51 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size<strong></td>
											<td>64 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 530</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.05 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes</strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed</strong></td>
											<td>4.37 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocked Clock Speed(water)</strong></td>
											<td>4.48 GHz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="processor-col animate-box">
							<img src="i5-6500Processor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction8()"><span>Intel Core i5-6500 <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal8">
							<div class="modal-content">
								<span class="close8">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i5-6500</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>FCLGA1151</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>6 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>
											<td>3.2 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.6 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>65 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>64 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 530</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>350 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.05 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes</strong></td>
											<td>16</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="processor-col animate-box">
							<img src="i5-3570kProcessor.jpg" width="250px" height="250px">
								<span class="text-content" onclick="myFunction9()"><span>Intel Core i5-3570K <br /> Click to view specification</span></span>
						</div>
						<div class="modal" id="myModal9">
							<div class="modal-content">
								<span class="close9">x</span>
								<table id="processor-table-no-border" cellspacing="0" cellpadding="0">
									<thead>
										<tr><th colspan="2">Technical Specification</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Processor Number</strong></td>
											<td>i5-3570K</td>
										</tr>
										<tr>
											<td><strong>Socket Compatibility</strong></td> 
											<td>LGA1155</td>
										</tr>
										<tr>
											<td><strong>Cache</strong></td> 
											<td>6 MB SmartCache</td> 
										</tr>
										<tr>
											<td><strong>Cores</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Threads</strong></td>
											<td>4</td>
										</tr>
										<tr>
											<td><strong>Processor Base Frequency</strong></td>	
											<td>3.4 GHz</td>
										</tr>
										<tr>
											<td><strong>Max Turbo Frequency</strong></td>
											<td>3.8 GHz</td>
										</tr>
										<tr>
											<td><strong>TDP</strong></td>
											<td>77 W</td>
										</tr>
										<tr>
											<td><strong>Max Memory Size</strong></td>
											<td>32 GB</td>
										</tr>
										<tr>
											<td><strong>Processor Graphics</strong></td>
											<td>Intel® HD Graphics 4000</td>	
										</tr>
										<tr>
											<td><strong>Graphics Base Frequency</strong></td>
											<td>650 MHz</td>
										</tr>
										<tr>
											<td><strong>Graphics Max Dynamic Frequency</strong></td>						
											<td>1.15 GHz</td>
										</tr>
										<tr>
											<td><strong>Multiple Displays</strong></td>
											<td>3 Displays</td>
										</tr>
										<tr>
											<td><strong>PCI Express Revision</strong></td>
											<td>3.0</td>
										</tr>
										<tr>
											<td><strong>PCI Express Configurations</strong></td>
											<td>Up to 1x16, 2x8, 1x8+2x4</td>
										</tr>
										<tr>
											<td><strong>Max # of PCI Express Lanes</strong></td>
											<td>16</td>
										</tr>
										<tr>
											<td><strong>Overclocking clock speed</strong></td>
											<td>4.61 GHz</td>
										</tr>
										<tr>
											<td><strong>Overclocking clock speed(water)</strong></td>
											<td>4.55 GHz</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--
						<div class="processor-col animate-box" style="background-image: url(Lenovo_logo.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="prod-title">
									<h3>LENOVO</h3>
									<span>FOR THOSE WHO DO</span>
								</div>
							</a>
						</div>-->
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