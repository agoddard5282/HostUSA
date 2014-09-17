<?php $pageTitle = 'Website Hosting Services'; include 'header.php'; ?>

						<!-- Content Slider -->
			<div class="contentSlider">
				<div class="center">
						
						
						
						
						<div class="slide clearfix">
						<div class="slideSwitchLabel"><strong>Shared</strong> Hosting</div>
						<div class="information">
							<h1><strong>Shared</strong> Hosting</h1>
							<p>Fast, reliable, web hosting at an affordable price, and 24/7 technical support.</p>
							<ul class="clearfix">
								<li>99.9% Uptime</li>
								<li>FREE Website Builder</li>
								<li>FREE Website Transfer</li>
								<li>30 Day Money Back Guarantee</li>
							</ul>
														
						<div class="box clearfix">
								<div class="label">
									Starting<br />at								
								</div>
								<div class="price">
									<h3 style="text-align: center;"><?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<strike><h5 style='padding-right: 40px;'><i>$3.95/month</i></h5></strike>*$1.95";
      	}
      	else {
      		echo "$3.95";
      	}
?> a month</h3>								
								</div>
								<a class="colorButton" href="./web-hosting.php"><span class="pointer"><strong>View</strong> all available plans now</span></a>
						</div>
						</div>
						<img src="./img/images/shared-server.png" alt="./img/images/shared-server.png" />	
					</div>
					
					<!-- 
					<div class="slide clearfix">
						<div class="slideSwitchLabel">
							<strong>Shared</strong> Hosting</div>
						<div class="information">
							<h1><strong>Shared</strong> Hosting</h1>
							<p>Fast, reliable, web hosting at an affordable price, and 24/7 technical support.</p>
							<ul class="clearfix">
								<li>99.9% Uptime</li>
								<li>FREE Website Builder</li>
								<li>FREE Website Transfer</li>
								<li>30 Day Money Back Guarantee</li>
							</ul>
														
						<div class="box clearfix">
								<div class="label">
									Starting<br />at								
								</div>
								<div class="price">
									$3.95								
								</div>
								<a class="colorButton" href="./web-hosting.php"><span class="pointer"><strong>View</strong> all available plans now</span></a>
						</div>
						</div>
						<img src="./img/images/shared-server.png" alt="./img/images/shared-server.png" />
					</div>
					 -->
					
					
					
						<div class="slide clearfix">
						<div class="slideSwitchLabel"><strong>Rapid</strong> Support</div>
						<div class="information">
							<h1><strong>Rapid</strong> Support</h1>
							<p>Our support team is extremely fast and can help you with setting up your hosting account and uploading your website on your account.</p>
							<ul class="clearfix">
								<li>- Highly Trained Support Technicians</li>
								<li>- 24/7 availability on chat and tickets </li>
								<li></li>
								<li></li>
							</ul>
							<div class="box clearfix">
								<div class="price">
									<a class="colorButton" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/clients/submitticket.php"><span class="pointer"><strong>Contact</strong> Support</span></a>								
								</div>
								
						</div>
				
							
							</div>
						<img src="./img/images/support-large1.png" alt="./img/images/support-large1.png" />
					</div>
					<div class="slide clearfix">
						<div class="slideSwitchLabel">
							<strong>Our</strong> Guarantee						</div>
						<div class="information">
							<h1><strong>Our</strong> Guarantee</h1>
							<p>To ensure you receive the best possible service, we have implemented a few guarantees that we're sure you'll find an excellent addition to your services here at HostUSA.</p>
							<ul class="clearfix">
								<li>30 Day Money Back Guarantee</li>
								<li>99.9% Uptime Guarantee</li>
								<li>Always Friendly Technical Support</li>
								<li>Always Improving Our Services</li>
							</ul>
								</div>
						<img src="./img/images/guarantee-large.png" alt="./img/images/guarantee-large.png" />
						</div>
					</div>
					
					
																								
																								
			</div>
						<!-- Content Wrapper -->
			<div class="contentWrapper">
				<div class="outerShadow">
				</div>
				<div class="innerShadow">
				</div>
				<div class="center clearfix">
					<!-- Additional clearfix necessary for non floated objects -->
					<div class="clearfix">
					</div>
					<!-- Content Starts -->
<div class="separator"></div>

<!-- Content -->
<div class="column tiny">
<h3><span class="iconMediumServer">Starter Plan</span></h3>
<p class="break"></p>
<h3 style="text-align: center;"><?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<strike><h5 style='padding-right: 40px;'><i>$3.95/month</i></h5></strike>*$1.95";
      	}
      	else {
      		echo "$3.95";
      	}
?> a month</h3>
<div class="listTick">
<ul>
<li>1 GB Disk Space</li>
<li>Unlimited Bandwidth</li>
<li>Unlimited email Accounts</li>
<li>No Setup Fee</li>
<li>Instant Activation</li>
</ul>
</div>
<p>&nbsp;<br />
<a class="colorButton" href="./web-hosting.php"><span class="pointer"><strong>More</strong> Info</span></a>
</div>
<div class="column tiny">
<h3><span class="iconMediumServer">Basic Plan</span></h3>
<p class="break"></p>
<h3 style="text-align: center;"><?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<strike><h5 style='padding-right: 40px;'><i>$5.95/month</i></h5></strike>*$2.95";
      	}
      	else {
      		echo "$5.95";
      	}
?> a month</h3>
<div class="listTick">
<ul>
<li>5 GB Disk Space</li>
<li>Unlimited Bandwidth</li>
<li>Unlimited email Accounts</li>
<li>No Setup Fee</li>
<li>Instant Activation</li>
</ul>
</div>
<p>&nbsp;<br />
<a class="colorButton" href="./web-hosting.php"><span class="pointer"><strong>More</strong> Info</span></a>
</div>
<div class="column tiny">
<h3><span class="iconMediumServer">Pro Plan</span></h3>
<p class="break"></p>
<h3 style="text-align: center;"><?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<strike><h5 style='padding-right: 40px;'><i>$7.95/month</i></h5></strike>*$3.95";
      	}
      	else {
      		echo "$7.95";
      	}
?> a month</h3>
<div class="listTick">
<ul>
<li>Unlimited GB Disk Space</li>
<li>Unlimited Bandwidth</li>
<li>Unlimited email Accounts</li>
<li>No Setup Fee</li>
<li>Instant Activation</li>
</ul>
</div>
<p>&nbsp;<br />
<a class="colorButton" href="./web-hosting.php"><span class="pointer"><strong>More</strong> Info</span></a>
</div>
<div class="column tiny last">
<h3><span class="iconMediumHelp">Support Center</span></h3>
<p class="break"></p>
<?php include 'content_header.php'; ?>
</div>
<div class="clearfix"></div>
<p class="separatorShadow">
<div class="column small">
<h3>Customer Review</h3>
<p class="break"></p>
<div class="testimonialBox">
<p>"HostUSA helped me with not only superior hosting, but also went the extra mile with a website design."</p>
<div class="author">Jerry Fry, Owner TQC</div>
</div>
</div>
<div class="grid-7">
<div class="box-home" id="register-domains">
<div class="fade">
<h3><a href="<?php echo 'https://'.$_SERVER['HTTP_HOST']; ?>/clients/domainchecker.php">Register a Domain or Check Domain Availability</a></h3>
<p>Keep your domains and hosting all on one account! HostUSA offers domain registration and domain tools with our hosting plans.</p>
<form id="domain-form" action="<?php echo 'https://'.$_SERVER['HTTP_HOST']; ?>/clients/domainchecker.php" method="post">
                	<input type="hidden" name="token" value="3153bb570c182afcaac8a534cb6f60d129e63314" /><br />
                    <input type="hidden" name="direct" value="true" /><br />
                    <input type="text" name="domain" size="20" /> </p>
<select name="ext" class="custom-select">
	<option>.com</option>
	<option>.net</option>
	<option>.org</option>
	<option>.us</option>
	<option>.co</option>
	<option>.info</option>
	<option>.biz</option>
	<option>.name</option>
</select>
<p><input type="submit" value="Go" class="button" /></p>
</form>

<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/clients/cart.php?a=add&#038;domain=transfer" class="icon-transfer">Click to Transfer A Domain</a>
        	</div>
</p></div>
</p></div>

					<!-- Content Ends -->
				</div>
			</div>
<?php include 'footer.php'; ?>						