<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main" class="">


<div class="internal_banner">
	
	<?php $banner_image = get_field( 'banner_image', 'option' ); ?>
	
	<?php if ( $banner_image ) { ?>
	
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
	
	<?php } ?>
	
	<div class="internal_banner_content">
		
		<span class="large_header"><?php the_field( 'banner_verbiage_pa_directory', 'option' ); ?></span><!-- large_header -->
		
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
