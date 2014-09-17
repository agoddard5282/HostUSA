<!-- Twitter Widget -->
			<div class="twitterWidget">
				<div class="center">
					<a class="profileLink" href="http://twitter.com/hostusa"></a><p>Loading<span>Retrieving latest tweet...</span></p>
				</div>
			</div>
						<!-- Site Footer -->
						<div class="siteFooter">
				<div class="center clearfix">
					<div class="column small widget widget_nav_menu"><h5>Main Navigation</h5><div class="menu-footer-menu-container">
					
					<ul id="menu-footer-menu" class="menu">
						<li><a href="./"><strong>Home</strong><br /><span> </span></a></li>
						<li><a href="./web-hosting.php"><strong>Web</strong> Hosting<br /><span> </span></a></li>
						<li><a href="./why-us.php"><strong>Why</strong> Us?<br /><span> </span></a></li>
						<li><a href="./features.php"><strong>Features</strong><br /><span> </span></a></li>
						<li><a href="./contact-us.php"><strong>Contact</strong> Us<br /><span> </span></a></li>
					</ul>
					</div>
				</div>


					<div class="column small widget widget_nav_menu"><h5>Additional Information</h5>
						<div class="menu-additional-information-container"><ul id="menu-additional-information" class="menu">
							<li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
								<a href="./about-hostusa.php"><strong>About</strong> HostUSA<br />
								<span></span></a>
							</li>
							<li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63">
								<a href="./company-blog.php"><strong>Company</strong> Blog<br />
								<span> </span></a>
							</li>
							
							
</ul></div></div>
					<div class="column small widget supportWidget"><h5>Support Center</h5>		 	
			<? include 'content_header.php'; ?>
		 	
		 	</div>
		 	
		 	<div class="column small widget widget_text"><h5>Follow <span>Us</span></h5>			
		 	<div class="textwidget"><div class="noBorder">
<a href="http://facebook.com/hostusa" target="_blank"><img class="alignnone size-thumbnail wp-image-424" alt="facebook" src="./img/images/facebook-150x150.png" width="40" height="40" /></a> 

<a href="http://twitter.com/hostusa" target="_blank"><img class="alignnone size-thumbnail wp-image-424" alt="facebook" src="./img/images/twitter-150x150.png" width="40" height="40" /></a>

<a href="https://plus.google.com/111116170482229832762" rel="publisher" target="_blank"><img class="alignnone size-thumbnail wp-image-424" alt="google+" src="./img/images/google_plus_1.png" width="40" height="40" /></a>

<a href="http://www.linkedin.com/company/hostusa.co" rel="publisher" target="_blank"><img class="alignnone size-thumbnail wp-image-424" alt="google+" src="./img/images/LinkedIn_logo.png" width="40" height="40" /></a>

<a href="https://safeweb.norton.com/report/show_mobile?url=hostusa.co" rel="publisher" target="_blank"><img class="alignnone size-thumbnail wp-image-424" alt="google+" src="./img/images/norton-safe-web.png" width="70%" /></a>
					






</div></div>
		</div>

		
<div class="footercards">
	<img src="./img/icons/credit-card-icons.png" width="40%" alt="Visa" />
	<a href="http://www.sslshopper.com/ssl-checker.html#hostname=www.hostusa.us" target="_blank"><div id="imageSSL"></div></a>		
</div>

								
		</div>
			</div>
						<!-- Site Footer Bar -->
			<div class="siteFooterBar">
  <div class="center"> <a class="backToTop" href="#">Back to Top</a>
    <p>Follow us on <a href="http://www.twitter.com/hostusa" target="_blank">Twitter</a> and <a href="http://www.facebook.com/hostusa" target="_blank">Facebook</a> to receive updates regarding network issues, discounts and more.<br />
      <?= date('Y'); ?> &copy; - All rights reserved. 
      <br>
      <?php if(isset($_GET['ip']) && $_GET['ip'] == 'true') { 
      		echo $_SERVER['REMOTE_ADDR']; }
      ?>
  </div>
</div>
		</div>
		<!-- Site Wrapper Ends -->
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47000202-1', 'hostusa.co');
  ga('send', 'pageview');

</script>			
<script type="text/javascript">
        $(document).ready(function(){

        $(".toggle_container").hide();

        $(".full-feature-list").click(function(){
                $(this).toggleClass("active").next().slideToggle("slow");
        });

        });
</script>

<script type="text/javascript">
                $(document).ready(function() {
                        /*
                        *   Examples - images
                        */

                        $("a#fbox").fancybox({
                                'titleShow'             : false
                        });

                });
</script>

<script type="text/javascript">
var __lc = {};
__lc.license = 3760301;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>


</body>
</html>