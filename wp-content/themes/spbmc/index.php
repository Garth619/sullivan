<?php get_header(); ?>

<div id="internal_main" class="">


<div class="internal_banner">
	
	<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
	
	<div class="internal_banner_content">
		
		<span class="large_header">New York Personal Injury Attorneys </span><!-- large_header -->
		
		<a class="button" href="#consultation">Click for free consultation</a>
		
	</div><!-- internal_banner_content -->
	
</div><!-- internal_banner -->


<div class="container two_col">
	
	
	<?php get_sidebar(); ?>
	
	<div class="content_wrapper content">
		
		<h1>New York Personal Injury Attorney Blog</h1>
		
		<div class="blog_feed">
		
			<?php get_template_part( 'loop', 'index' ); ?>
		
		</div><!-- blog_feed -->

	</div><!-- content_wrapper -->
	
	
</div><!-- container -->



</div><!-- internal_main -->



<?php get_footer(); ?>
