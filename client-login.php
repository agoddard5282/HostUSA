<?php $pageTitle = 'Client Login'; include 'header.php'; ?>
						<!-- Content Header -->
			<div class="contentHeader">
				<div class="center">
										<h1>  <strong>Client</strong> Login</h1>
					<?php include 'content_header.php'; ?>
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
<div class="column medium">
<h3>HostUSA Billing Account Manager</h3>
<p>Login to your customer portal to access billing information and support tickets.<br /> You will be able to make changes to billing information, modify domain settings, submit support tickets and get status updates on previously submitted tickets.
<p class="negativeSeparator"></p>
<form class="loginForm" action="http://www.hostusa.co/clients/dologin.php" method="post"><input type="hidden" name="token" value="3153bb570c182afcaac8a534cb6f60d129e63314" /></p>
<div class="column"><label for="email">Email Address</label> <input id="email" type="text" name="username" /></div>
<p class="break"></p>
<div class="column"><label for="password">Password</label> <input id="password" type="password" name="password" /></div>
<p class="break"></p>
<div class="column checkbox"><input id="save" type="checkbox" name="save" /><label for="save">Remember me on this computer</label></div>
<p><button class="colorButton" type="submit">Login</button></p>
<div class="help"><a href="http://www.hostusa.co/clients/pwreset.php"><strong>Forgot your password?</strong></a></div>
</form>
</div>
<div class="column medium last">
<h3>cPanel (Control Panel) Web Host Login</h3>
<p>Login to cPanel to manage your web hosting platform. From cPanel you will be able to create new emails, check email, setup and manage databases, install new software, upload and download files with file manager and much more.</p>
<p class="negativeSeparator">
<form class="loginForm" action="http://www.hostusa.co:2082/login/" method="post"><input type="hidden" name="token" value="3153bb570c182afcaac8a534cb6f60d129e63314" /></p>
<div class="column"><label for="email">cPanel User Name</label> <input id="user" type="text" name="user" /></div>
<p class="break"></p>
<div class="column"><label for="password">Password</label> <input id="password" type="password" name="pass" /></div>
<p><button class="colorButton" type="submit">Login</button><br />
</form>
</div>
<div class="clearfix"></div>

					<!-- Content Ends -->
				</div>
			</div>
<?php include 'footer.php'; ?>