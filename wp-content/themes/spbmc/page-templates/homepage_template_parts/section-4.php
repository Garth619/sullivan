<section id="section_four">
	
	<div class="sec_four_left">
		
		<div class="sec_four_left_border">
			
			<div class="sec_four_left_inner">
				
				<?php $section_four_desktop_skyline = get_field( 'section_four_desktop_skyline' ); ?>
				
				<?php if ( $section_four_desktop_skyline ) { ?>
				
				<img class="desktop" data-src="<?php echo $section_four_desktop_skyline['url']; ?>" alt="<?php echo $section_four_desktop_skyline['alt']; ?>" />
				
				<?php } ?>
				
				<?php $section_four_mobile_skyline = get_field( 'section_four_mobile_skyline' ); ?>
				
				<?php if ( $section_four_mobile_skyline ) { ?>
				
				<img class="mobile" data-src="<?php echo $section_four_mobile_skyline['url']; ?>" alt="<?php echo $section_four_mobile_skyline['alt']; ?>" />
				
				<?php } ?>
				
				<span class="client_title"><?php the_field( 'section_four_clients_verbiage' ); ?></span><!-- client_title -->
				
				<div class="sec_four_test_slideshow">
					
					<?php if(get_field('section_four_testimonials')): ?>
					 
						<?php while(has_sub_field('section_four_testimonials')): ?>
					 
								<div class="sec_four_single_slide">
						
									<span class="sec_four_test_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- sec_four_test_content -->
						
									<div class="sec_four_testi_client">
							
										<span class="client_name"><?php the_sub_field( 'name' ); ?></span><!-- client_name -->
							
										<span class="client_type"><?php the_sub_field( 'client' ); ?></span><!-- client_type -->
							
									</div><!-- sec_four_testi_client -->
						
								</div><!-- sec_four_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- sec_four_test_slideshow -->
				
			</div><!-- sec_four_left_inner -->
			
		</div><!-- sec_four_left_border -->
		
	</div><!-- sec_four_left -->
	
	<div class="sec_four_right">
		
		<span class="sec_four_pa_title"><?php the_field( 'section_four_practice_areas_title' ); ?></span><!-- sec_four_pa_title -->
		
		<div class="pa_lists">
			
			<?php if(get_field('section_four_pa_col_one')): ?>
				
						<ul>
				 
					<?php while(has_sub_field('section_four_pa_col_one')): ?>
				 
						<li><a href="<?php the_sub_field( 'page_link' ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
				    
					<?php endwhile; ?>
					
						</ul>
				 
				<?php endif; ?>
				
		
				<?php if(get_field('section_four_pa_col_two')): ?>
				
						<ul>
				 
					<?php while(has_sub_field('section_four_pa_col_two')): ?>
				 
						<li><a href="<?php the_sub_field( 'page_link' ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
				    
					<?php endwhile; ?>
					
						</ul>
				 
				<?php endif; ?>
			
		</div><!-- pa_lists -->
		
		<a class="button pa_button" href="<?php the_field( 'section_four_view_all_link' ); ?>
"><?php the_field( 'section_four_view_all_verbiage' ); ?></a>
		
	</div><!-- sec_four_right -->
	
</section><!-- section_four -->