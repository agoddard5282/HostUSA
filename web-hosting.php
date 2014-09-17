<?php $pageTitle = 'Website Hosting Services'; include 'header.php'; ?>
						
						<!-- Content Header -->
			<div class="contentHeader">
				<div class="center">
										<h1>  <strong>Web</strong> Hosting</h1>
					<? include 'content_header.php'; ?>
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
<div class="hostingHeader shared">
<div>
<div>
<h2>Number 1 Web Hosting</h2>
<p>Whether you are looking for great value for your personal website or require more advanced hosting features for your business.</p>
</div>
</div>
<div></div>
</div>
<div class="tableWrapper">
<table>
<tr>
<th><a href="./img/images/plans3.png"><img class="alignnone size-full wp-image-295" alt="plans" src="./img/images/plans3.png" width="200" height="33" /></a></th>
<th><img class="alignnone size-full wp-image-275" alt="starter" src="./img/images/starter2.png" width="200" height="33" /></th>
<th><img class="alignnone size-full wp-image-277" alt="basic" src="./img/images/basic.png" width="200" height="33" /></th>
<th><img class="alignnone size-full wp-image-278" alt="pro" src="./img/images/pro.png" width="200" height="33" /></th>
</tr>
<tr>
<td><strong>Disk Space</strong></td>
<td>1 GB Disk Space</td>
<td>5 GB Disk Space</td>
<td>Unlimited Disk Space</td>
</tr>
<tr>
<td><strong>Bandwidth</strong></td>
<td>Unlimited Bandwidth</td>
<td>Unlimited Bandwidth</td>
<td>Unlimited Bandwidth</td>
</tr>
<tr>
<td><strong>Hosted Domains</strong></td>
<td>Unlimited Hosted Domains</td>
<td>Unlimited Hosted Domains</td>
<td>Unlimited Hosted Domains</td>
</tr>
<tr>
<td><strong>Email Accounts</strong></td>
<td>Unlimited Email Accounts</td>
<td>Unlimited Email Accounts</td>
<td>Unlimited Email Accounts</td>
</tr>
<tr>
<td><strong>Real 24/7 Technical Support</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>cPanel</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>CGI, ROR, Perl, PHP, MySQL</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>30 Day Money Back Guarantee</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>Free Site Builder</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>Free cPanel Site Transfer</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>Softaculous Installer</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td><strong>Instant Activation</strong></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
<td><img alt="check" src="./img/images/check.png" width="22" height="24" /></td>
</tr>
<tr>
<td class="pricing"><strong></strong></td>
<td class="pricing"><strong>
<?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<h4><strike><i>$3.95/month</i></strike></h4>*$1.95";
      	}
      	else {
      		echo "$3.95";
      	}
?>
</strong><br /><span>monthly</span></td>
<td class="pricing"><strong>
<?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<h4><strike><i>$5.95/month</i></strike></h4>*$2.95";
      	}
      	else {
      		echo "$5.95";
      	}
?>
</strong><br /><span>monthly</span></td>
<td class="pricing"><strong>
<?php if(isset($_SESSION['special']) && $_SESSION['special'] == 'true') { 
      		echo "<h4><strike><i>$7.95/month</i></strike></h4>*$3.95";
      	}
      	else {
      		echo "$7.95";
      	}
?>
</strong><br /><span>monthly</span></td>
</tr>







<tr>
<td></td>
<td><a class="colorButton" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/clients/cart.php?a=add&amp;pid=16"><span class="pointer"><strong>Order Now</strong></span></a></td>
<td><a class="colorButton" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/clients/cart.php?a=add&amp;pid=17"><span class="pointer"><strong>Order Now</strong></span></a></td>
<td><a class="colorButton" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/clients/cart.php?a=add&amp;pid=15"><span class="pointer"><strong>Order Now</strong></span></a></td>
</tr>
</table>
</div>



<!-- 
<div class="pc5"></div>
</p></div>
<div class="full-feature-list"><a href="#FL">Click here to view full plan feature list and in-depth comparison chart</a></div>
<div class="toggle_container">
<ul class="allplans1 group">
<li>
									<span>Control Panel Features</span></p>
<ul>
<li>Unlimited Add-On Domains</li>
<li>Unlimited Sub Domains</li>
<li>Unlimited Parked Domains</li>
<li>Unlimited MySQL Databases</li>
<li>Webalizer, Awstats Stats</li>
<li>RVSiteBuilder Pro</li>
<li>Fantastico</li>
<li>Online Backups</li>
</ul>
</li>
<li>
									<span>E-Mail Features</span></p>
<ul>
<li>Unlimited E-Mail Accounts</li>
<li>Unlimited Forwards</li>
<li>Unlimited Auto Responders</li>
<li>Unlimited Mailing Lists</li>
<li>Virus / Spam Filtering</li>
<li>IMAP and POP3</li>
<li>Port 25/26 SMTP</li>
<li>WebMail</li>
</ul>
</li>
<li>
									<span>Server &amp; Network Features</span>									</p>
<ul>
<li>SSH Access</li>
<li>24/7 Server Monitoring</li>
<li>Starting at 8GB of RAM</li>
<li>Remote Backups</li>
<li>Premium Bandwidth</li>
<li>Clustered DNS</li>
<li>Leading Industry Web Server</li>
</ul>
</li>
<li style="margin-bottom: 0; border-right: none;">
									<span>Developer Features</span>									</p>
<ul>
<li>PHP 5 (gd, curl support)</li>
<li>MySQL 5</li>
<li>Ruby on Rails</li>
<li>Perl 5.8.8</li>
<li>Server Side Includes</li>
<li>Free Perl Module Installation</li>
</ul>
</li>
</ul></div>
 -->

					<!-- Content Ends -->
				</div>
			</div>
						
<?php include 'footer.php'; ?>