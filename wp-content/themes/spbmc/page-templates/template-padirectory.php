<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main" class="">


<div class="internal_banner">
	
	<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
	
	<div class="internal_banner_content">
		
		<span class="large_header">Cases We Handle</span><!-- large_header -->
		
		<a class="button" href="#consultation">Click for free consultation</a>
		
	</div><!-- internal_banner_content -->
	
</div><!-- internal_banner -->


<div class="container one_col">
	
	<div class="pa_directory_wrapper">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
	</div><!-- pa_directory_wrapper -->
		
	
</div><!-- container -->



</div><!-- internal_main -->



		
		


<?php get_footer(); ?>
