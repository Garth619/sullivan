<?php get_header(); ?>

<div id="internal_main" class="">


<?php get_template_part( '/page-templates/internal', 'banner' ); ?>


<div class="container two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="content_wrapper content">
		
		<h1>New York Personal Injury Attorney Blog</h1>
		
		<?php get_template_part( 'loop', 'single' ); ?>

	</div><!-- content_wrapper -->
	
</div><!-- container -->

Å</div><!-- internal_main -->



<?php get_footer(); ?>


