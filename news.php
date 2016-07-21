<?php
	session_start();   //initialized session
	if(isset($_SESSION['user'])){
		include ('headerlogout.php');   //get headerlogout if user logged in
	}
	else{
		include ('header.html');  //get header if user do not logged in
	}
?>
	
		<div class="fh5co-hero fh5co-hero-2" id="fh5co-section-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/blog-1.jpg);">
				<div class="desc animate-box">
					<h2>News</h2>
					<span>Computer Hardware Latest News</span>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		<div id="fh5co-services">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
						<div class="fh5co-icon"><img src="news1.jpg" width="350px" height="350px" alt=""></div>
					</div>
					<div class="col-md-8 col-md-push-1">
						<h4 class="fh5co-number">01.</h4>
						<h2>Gigabyte Unveils An Adorable GTX 1070 Graphics Card</h2>
						<p class="item">Graphics cards are almost always thought by PC gamers and enthusiasts as a rectangular black box (in most cases) that should look as fierce as they perform. 
						However, that’s not what Gigabyte had in mind when unveiling its latest iteration of  Nvidia’s GTX 1070 graphics card. 
						Dubbed as the GTX 1070 Mini ITX OC, Gigabyte’s latest graphics card is, well… cute. But don’t let the looks of this graphics card fool you though: it comes with beefy specs.</p>
						<p><button type="button" class="read_more" onclick="showhide1()">Read More</button><br/></p>
						<span id="hidetext1" style="display:none; font-size:20px">Measuring in at a miniscule 16.9cm in length, Gigabyte’s GTX 1070 Mini ITX OC comes with a single 90mm fan along with three copper heat pipes to ensure efficient cooling. 
						Gigabyte claims this graphics card to come with base and boost GPU clock speeds of 1531MHz and 1721MHz out of the box respectively- in Gaming Mode. 
						Meanwhile, the OC Mode preset ramps up the clock speeds to 1556MHz (base) and 1746MHz (boost).
						Jokes aside, small form-factor PC builders will definitely find the Gigabyte GTX 1070 Mini ITX OC rather tempting; especially when one considers its performance output. 
						Unfortunately, as usual, no price nor date of availability was announced by Gigabyte, but sources are estimating this graphics card to be priced at around €458 (about RM2,150), which isn’t a bad price at all.</span>
						<p>(Source: ComputerBase, VideoCardz)</p>
					</div>
				</div>

				<div class="row row-bottom-padded-lg">
					<div class="col-md-3 col-md-push-8">
						<div class="fh5co-icon"><img src="news2.jpg" width="350px" height="210px" alt=""></div>
					</div>
					<div class="col-md-7 col-md-pull-3">
						<h4 class="fh5co-number">02.</h4>
						<h2>Rumour: Nvidia To Release GTX 1050 Ti And GTX 1060 Notebook GPUs</h2>
						<p>A few days after the alleged leak of a driver listing several unreleased mobile Pascal GPUs, new rumours of Nvidia prepping two Pascal-based GPUs have surfaced. 
						The mobile GPUs in question are the GTX 1050 Ti and GTX 1060 – both of which are said to replace the Maxwell-based GTX 950M and GTX 960M GPUs. 
						Interestingly, like previous rumours before this, the “M” suffix is not being included in the GPU nomenclature.</p>
						<p><button type="button" class="read_more" onclick="showhide2()">Read More</button><br/></p>
						<span id="hidetext2" style="display:none; font-size:20px"><p>According to LaptopMedia, the rumoured GTX 1050 Ti will come with 4GB VRAM along with a memory bus width of 128-bit. 
						Unsurprisingly, this mobile GPU will be equipped with the GDDR5 memory standard. Interestingly, if this rumour were to true, it’ll be the first time that Nvidia has fitted a GPU with a “Ti” suffix inside a gaming notebook. 
						It’s also worth nothing that the GTX 1050 Ti will carry the codename “N17P-G1”.</p>
						<p>Next up is the GTX 1060; and no, this isn’t the one from Hong Kong. There’s a high chance that both the mobile and desktop versions of this graphic card will share the same GPU. 
						The memory capacity of the mobile GTX 1060 GPU is said to be at 6GB and it’ll be using the GDDR5 memory standard. In addition, it’s said that this GPU will come with a 192-bit memory bus width.</p>
						<p>So far, this rumour comes only from one source; which means that this one should be taken with a grain of salt. Regardless, with more and more rumours of Pascal-based notebook GPUs surfacing, talks of an official launch happening very soon becomes increasingly likely.</p></span>
						<p>(Source: LaptopMedia via VideoCardz)</p>
					</div>
				</div>

				<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
						<div class="fh5co-icon"><img src="news3.jpg" width="350px" height="220px" alt=""></div>
					</div>
					<div class="col-md-8 col-md-push-1">
						<h4 class="fh5co-number">03.</h4>
						<h2>Asus And Sapphire Showcase Their Custom RX 480 Graphics Cards</h2>
						<p>As one would expect, custom RX 480 graphics cards are now pouring in. Companies like Asus and Sapphire have unveiled their custom versions of the new Radeon graphics card. Namely the ROG Strix RX 480 and the RX 480 Nitro. 
						Of course, both versions are said to bring better cooling solutions compared to the reference-desidgned Radeon RX 480.</p>
						<p><button type="button" class="read_more" onclick="showhide3()">Read More</button><br/></p>
						<span id="hidetext3" style="display:none; font-size:20px"><p>First up is the Asus ROG Strix RX 480, which looks absolutely stunning. The design of the graphics card resembles that of the ROG Strix GTX 1070 and ROG Strix GTX 1080. 
						It comes equipped with three wing-blade fans along with Asus’ Direct CU III cooling technology. In addition, the graphics card will come with a metal backplate and yes, Aura RGB lighting as well – to satisfy your LED needs. 
						Unfortunately, no other information about the ROG Strix was announced by Asus, but do expect the company to reveal more details soon.</p>
						<p>Following suit is Sapphire and its RX 480 Nitro graphics card. The announcement of the graphics card came during the company’s live stream event that was held late last night. 
						It seems that rumours about Sapphire releasing a graphics card that looks like a cheese grater has indeed become true.. well, at least now it comes in a matte black finish so that’s something right?</p>
						<p>Consumers keen on getting a Radeon RX 480 but is now having seconds thoughts because of its PCIe power draw issue should consider getting Sapphire’s Nitro RX 480 instead because it comes with an 8-pin power connector, which should improve the power delivery of the graphics card.</p></span>
						<p>(Source: Asus, VideoCardz)</p>
					</div>
				</div>

				<div class="row row-bottom-padded-lg">
					<div class="col-md-3 col-md-push-8">
						<div class="fh5co-icon"><img src="news4.jpg" width="400px" height="250px" alt=""></div>
					</div>
					<div class="col-md-7 col-md-pull-3">
						<h4 class="fh5co-number">04.</h4>
						<h2>NVIDIA GeForce GTX 1060 Goes Official: As Powerful As GTX 980, Price Starts At Around RM 1,000</h2>
						<p>The GeForce GTX 1080 and GTX 1070 might have just entered our market recently but ready or not, here comes yet another Pascal-based graphics card from NVIDIA: the new GTX 1060. 
						The company has boldly claimed that the performance of the new GTX 1060 is able to match GTX 980 which is a high-end card based on NVIDIA previous generation GPU architecture, Maxwell.</p>
						<p><button type="button" class="read_more" onclick="showhide4()">Read More</button><br/></p>
						<span id="hidetext4" style="display:none; font-size:20px">
						<p>NVIDIA further claimed that on average, the GTX 1060 which is built with the brand new GP106 chip is 15 percent faster and 75 percent more power efficient than its nearest competitor. 
						We’ll have to test the card first to see how true these claims are but nevertheless, these are what the new GTX 1060 brings to the table as compared to its more powerful siblings according to their specifications:</p>
						<p>Performance-aside, the GTX 1060 does come with one caveat though: it doesn’t support SLI multi-card configuration which has happened before with GTX 750 and GTX 750 Ti. 
						It is not known if the feature will be made available for custom boards from add-in card manufacturers but we are able to confirm that the SLI connector is missing on the Founders Edition variant of GTX 1060.</p>
						<p>Meanwhile, both Founders Edition and custom GTX 1060 cards will be making their way to consumers starting from 19 July with a price tag of USD 299 (about RM 1,204) and USD 249 (RM 1,003) respectively. 
						Based on our previous experiences, the Malaysian price for these cards might be different which means that you might want to adjust your expectations accordingly.</p></span>
					</div>
				</div>


				<div class="row row-bottom-padded-lg">
					<div class="col-md-3">
						<div class="fh5co-icon"><img src="news5.png" width="350px" height="220px" alt=""></div>
					</div>
					<div class="col-md-8 col-md-push-1">
						<h4 class="fh5co-number">05.</h4>
						<h2>Samsung Releases Monstrous 4TB 850 EVO SSD</h2>
						<p>Samsung launched a new 4TB SSD under the 850 EVO lineup, which should be able to rid your desktop PCs of ever having a HDD. 
						The new Samsung 850 EVO 4TB SSD offers double the capacity of the company existing 850 EVO lineup.</p>
						<p><button type="button" class="read_more" onclick="showhide5()">Read More</button><br/></p>
						<span id="hidetext5" style="display:none; font-size:20px">
						<p>Apart from just storing your important documents, the EVO 4TB SSD features a 540MB/s read speed with 520MB/s write speed. 
						The Samsung 850 EVO 4TB SSD is currently the largest capacity consumer-grade SSD users can purchase (with “consumer” being the keyword here). Despite the large capacity, the Samsung’s 850 EVO still uses a SATA port.
						This means that the transfer speeds are nowhere near those of SSDs that use M.2, U.2 or PCIe.</p>
						<p>Samsung’s EVO 850 4TB SSD will be arriving in the United States on the 31st of July, and the price you’ll be paying for high-end read write speeds and the large capacity is a steep $1,499 (about RM6,000), which is easily the price of a mid to high-end gaming desktop.</p></span>
						<p>(Source: PCWorld via TechRadar)</p>
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-md-push-8">
						<div class="fh5co-icon"><img src="news6.jpg" width="400px" height="250px" alt=""></div>
					</div>
					<div class="col-md-7 col-md-pull-3">
						<h4 class="fh5co-number">06.</h4>
						<h2>Manufacturers Begin To Introduce Their Custom GeForce GTX 1060 Cards</h2>
						<p>Ahead of NVIDIA GeForce GTX 1060‘s general release day on 19 July, several manufacturers have slowly started to unveil their version of the new graphics card. As you might have heard, 
						the new GTX 1060 card is the latest addition to NVIDIA GeForce GTX 10 Series and promises to bring GTX 980-level of performance to more gamers than before at a much more affordable price tag.</p>
						<p><button type="button" class="read_more" onclick="showhide6()">Read More</button><br/></p>
						<span id="hidetext6" style="display:none; font-size:20px"><p>However, these manufacturers are still holding back plenty of information regarding their new GTX 1060 cards given how the release date is still a week away. 
						Some companies don’t even reveal the photo of their actual cards at the moment.</p>
						<p>One such manufacturer that does that is ZOTAC who nevertheless has announced that it will releasing two versions of GTX 1060 called AMP Edition and Mini that apparently have shorter than most graphics card. 
						Even though the company has yet to release any official photos for both products, they have been leaked out by the serial graphics card leakers at VideoCardz.</p>
						<p>Being the more powerful model out of the two cards, the AMP Edition carries ZOTAC’s own IceStorm thermal solution which consisted of 8mm copper heat pipes, copper plate, and dual 90mm fans that operate dynamically according to the card’s temperature. 
						The GTX 1060 AMP Edition is also factory clocked to be higher than NVIDIA’s own GTX 1060 Founders Edition card.</p></span>
					</div>
				</div>


			</div>
		</div>
		<script>
			function showhide1()
			{
				if(document.getElementById('hidetext1').style.display == 'none')  //if the text display none
				{
					document.getElementById('hidetext1').style.display='block';   //pop up the hide text
				}
				else{document.getElementById('hidetext1').style.display = 'none';}  //hide the pop up again
			}
			function showhide2()
			{
				if(document.getElementById('hidetext2').style.display == 'none')
				{
					document.getElementById('hidetext2').style.display='block';
				}
				else{document.getElementById('hidetext2').style.display = 'none';}
			}
			function showhide3()
			{
				if(document.getElementById('hidetext3').style.display == 'none')
				{
					document.getElementById('hidetext3').style.display='block';
				}
				else{document.getElementById('hidetext3').style.display = 'none';}
			}
			function showhide4()
			{
				if(document.getElementById('hidetext4').style.display == 'none')
				{
					document.getElementById('hidetext4').style.display='block';
				}
				else{document.getElementById('hidetext4').style.display = 'none';}
			}
			function showhide5()
			{
				if(document.getElementById('hidetext5').style.display == 'none')
				{
					document.getElementById('hidetext5').style.display='block';
				}
				else{document.getElementById('hidetext5').style.display = 'none';}
			}
			function showhide6()
			{
				if(document.getElementById('hidetext6').style.display == 'none')
				{
					document.getElementById('hidetext6').style.display='block';
				}
				else{document.getElementById('hidetext6').style.display = 'none';}
			}
		</script>
<?php
	require("footer.html");
?>