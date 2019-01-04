<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="internal_header">
		
		<img class="skyline" src="<?php bloginfo('template_directory');?>/images/ico-city.svg"/>
			
		<h1><?php the_title();?></h1>
		
		<span class="testimonial_subheader">What Our Clients Say</span><!-- testimonial_subheader -->
			
	</div><!-- internal_header -->
	
	<div class="testimonial_wrapper content">
		
		<div class="testimonial_col">
			
			<?php if(get_field('testimonials')): ?>
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
					<div class="single_testimonial">
				
						<span class="testi_name"><?php the_sub_field( 'attorney_name' ); ?></span><!-- testi_name -->
				
						<?php the_sub_field( 'testimonial' ); ?>
				
						<span class="client_name"><?php the_sub_field( 'client_name' ); ?></span><!-- client_name -->
				
					</div><!-- single_testimonial -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- testimonial_col -->
		
		<div class="testimonial_col">
			
			<?php if(get_field('testimonials_column_two')): ?>
			 
				<?php while(has_sub_field('testimonials_column_two')): ?>
			 
					<div class="single_testimonial">
				
						<span class="testi_name"><?php the_sub_field( 'attorney_name' ); ?></span><!-- testi_name -->
				
						<?php the_sub_field( 'testimonial' ); ?>
				
						<span class="client_name"><?php the_sub_field( 'client_name' ); ?></span><!-- client_name -->
				
					</div><!-- single_testimonial -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- testimonial_col -->
		
	</div><!-- testimonial_wrapper -->
	
	
	</div><!-- container -->


</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
