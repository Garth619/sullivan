<?php get_header(); ?>

<div id="internal_main" class="">


<?php get_template_part( '/page-templates/internal', 'banner' ); ?>

<div class="container two_col">
	
	
	<?php get_sidebar(); ?>
	
	<div class="content_wrapper content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- content_wrapper -->
	
	
</div><!-- container -->

</div><!-- internal_main -->


<?php get_footer(); ?>
