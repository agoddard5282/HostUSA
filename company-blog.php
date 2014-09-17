<?php $pageTitle = 'Company Blog'; include 'header.php'; ?>
						<!-- Content Header -->
			<div class="contentHeader">
				<div class="center">
										<h1>  <strong>Company</strong> Blog</h1>
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

<div class="siteColumnLeft clearfix">
	
	<!-- Content -->
	<?php include 'blog/blog_post.php'; ?>				
</div>

<?php include 'sidebar.php'; ?>
					<!-- Content Ends -->
				</div>
			</div>
<?php include 'footer.php'; ?>