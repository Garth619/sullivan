<?php 

/* Template Name: Contact */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="internal_header">
			
		<h1><?php the_title();?></h1>
			
	</div><!-- internal_header -->
	
	<div class="contact_page_wrapper">
		
		<div class="contact_left">
			
			<?php if(get_field('footer_locations', 'option' )): ?>
			 
				<?php while(has_sub_field('footer_locations', 'option' )): ?>
			 
						<div class="contact_page_single">
				
							<div class="contact_page_inner_single">
				
								<span class="location_title"><?php the_sub_field( 'firm_title' ); ?></span><!-- location_title -->
				
								<span class="address"><?php the_sub_field( 'firm_street_address' ); ?></span><!-- address -->
				
								<a class="get_directions" href="<?php the_sub_field( 'firm_directions_link' ); ?>" target="_blanl" rel="noopener">Get Directions</a><!-- get_directions -->
				
								<div class="contect_phone_wrapper phone">
					
									<span>Phone</span>
					
									<a href="">(212) 732-9000</a>
					
								</div><!-- contect_phone_wrapper -->
				
								<div class="contect_phone_wrapper fax">
					
									<span>Fax</span>
					
									<a href="">(212) 266-4141</a>
					
								</div><!-- contect_phone_wrapper -->
				
							</div><!-- contact_page_inner_single -->
				
						</div><!-- contact_page_single -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<div class="contact_right_inner">
			
				<img src="<?php bloginfo('template_directory');?>/images/img-contact.jpg"/>
			
			</div><!-- contact_right_inner -->
			
		</div><!-- contact_right -->
		
	</div><!-- contact_page_wrapper -->
	
	
	</div><!-- container -->


</div><!-- internal_main -->


<div class="iframe_locations">
	
	<iframe src="https://snazzymaps.com/embed/124285" width="100%" height="600px" style="border:none;"></iframe>
	
</div><!-- iframe_locations -->
					 
					 	
<?php get_footer(); ?>
