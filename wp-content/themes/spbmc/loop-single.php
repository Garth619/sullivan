<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="single_blog_post">
		
		<h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><!-- blog_post_title -->
		
		<div class="blog_meta">
			
			<?php $pfx_date = get_the_date(); echo $pfx_date ?> in
			
			<?php echo get_the_category_list();?>
			
		</div><!-- blog_meta -->
		
		<div class="blog_content">
			
			<?php the_content();?>
			
		</div><!-- blog_content -->
		
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
		
	</div><!-- single_blog_post -->	

<?php endwhile; // end of loop ?>

<?php endif; ?>