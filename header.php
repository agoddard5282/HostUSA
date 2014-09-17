<?php
session_start();

if(isset($_GET['special']) && $_GET['special'] == 'true') {
	$_SESSION['special'] = $_GET['special'];
}



/*if (isset($_SESSION['special']) && (time() - $_SESSION['special'] > 10)) {
    // last request was more than 30 minates ago
    session_destroy();   // destroy session data in storage
    session_unset();     // unset $_SESSION variable for the runtime
}
$_SESSION['special'] = time(); // update last activity time stamp
*/

include('functions.php');

/*if (isset($_GET['special'])) {
    $_SESSION['special'] = $_GET['special'];
}*/

if ($_SERVER['HTTPS'] != "on") {
    header("Location: $url");
    exit;
}

elseif (($_SERVER['HTTPS'] == "on") && $_SERVER['SERVER_NAME'] == 'hostusa.us') {
    header("Location: $url");
    exit;
}


								
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml"
xmlns:og="http://ogp.me/ns#"
xmlns:fb="http://www.facebook.com/2008/fbml">

	<head>
	
		<!-- Title -->
		<title>HostUSA : <?php echo $pageTitle ?></title>
		<!-- Meta Info -->
		<meta name="description" content="HostUSA is a provider in website hosting, and shared hosting. With one click installation for WordPress, Joomla, Drupal and hundreds more. Web Hosting that keeps your website up and running. Featuring 99.9% uptime guarantee.">
		<meta name="robots" content="noodp, noydir"/>
		<link rel="canonical" href="http://www.hostusa.co" />
		<meta name="keywords" content="web hosting, best web hosting, free website builder, web host, hosting, hosting company, best web hosting, website hosting, cpanel, shared hosting, wordpress, joomla, drupal">
    	<meta name="viewport" content="width=device-width">

    	
    	<meta property="og:type" content="website" />   	
    	<meta property="og:image" content="http://www.hostusa.co/img/fb_link.jpg" />
    	<link rel="image_src" href="http://www.hostusa.co/img/fb_link.jpg" / >
    	
    	<!-- Meta Info -->
    	
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/ico" href="./img/favicon.ico">
		<link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
		
		<!-- CSS -->
		<link rel='stylesheet' href='./css/style.css' type='text/css'>
		
		
		
		<style>
		#imageSSL {
		    width:190px;
		    height:100px;
		    background-image:url('./images/geotrust.png');
		    background-repeat:no-repeat;
		    background-position:right;
		    position:relative;
		    margin:0 auto;
		    bottom:0px;
    		right: -340px;
		}
		</style>
		
		
		
		<!-- End of CSS -->
		
		<!-- Header JavaScript -->
		<script type='text/javascript' src='./js/jquery-1.10.2.min.js'></script>
		<script type='text/javascript' src='./js/jquery.cookie.min.js?ver=3.8'></script>
		<script type='text/javascript' src='./js/hostusa.js'></script>
		<!-- End of Header JavaScript -->
		
		<!-- Google Verify -->
		<meta name="google-site-verification" content="pOlPqkgjVBMKtiMr9Cr_2lDwtc4kAkQZ6BZrtY4mKPU" />
		<!-- End Google Verify -->
		
		<!--
		<script>
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		window.location = "http://www.hostusa.co/mobile";
		}
		</script>
		-->



	</head>
	<body>
	
		<!-- Site Wrapper Start -->
		<div class="siteWrapper">
			<!-- Site Header -->
			<div class="siteHeaderShadow">
			</div>
			<div class="siteHeader">
				<div class="center">
					<a class="logo" href="<?php echo $url; ?>"></a>
					<ul class="navigation">
						<li><a href="./web-hosting.php"><strong>Web</strong> Hosting<br /><span>cPanel powered</span></a></li>
						<li><a href="./features.php"><strong>Features</strong><br /><span>Hosting Features</span></a></li>
						<li><a href="./why-us.php"><strong>Why</strong> Us?<br /><span>Makes Us Different</span></a></li>
						
					<li><a href="./contact-us.php"><strong>Contact</strong> Us<br /><span>Questions/Support</span></a>
						<ul class="sub-menu">
								<li><a href="./contact-us.php"><strong>Contact</strong> Us<br /><span>Questions/Support</span></a></li>
								<li><a href="./about-hostusa.php"><strong>About</strong> HostUSA<br /><span>Who we are</span></a></li>
								<!-- 
								<li><a href="./jobs.php"><strong>Jobs</strong> at HostUSA<br /><span></span></a></li>
								 -->
								<li><a href="./company-blog.php"><strong>Company</strong> Blog<br /><span>Company News</span></a></li>
								<li><a href="./client-login.php"><strong>Client</strong> Login<br /><span>Account Manager or cPanel</span></a></li>
						</ul>
					</li>
						<li><a href="./web-hosting.php"><strong>Sign</strong> up<br /><span>Web Hosting</span></a></li>
</ul>				</div>
			</div>
			
		

