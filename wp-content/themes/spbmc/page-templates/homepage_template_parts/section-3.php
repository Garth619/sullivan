<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1><?php the_field( 'section_three_header' ); ?></h1>
		
		<div class="sec_three_content content">
			
				<?php the_field( 'section_three_content' ); ?>

		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
	<div class="sec_three_awards_wrapper">
			
			<div class="sec_three_awards_title_wrapper">
				
				<span class="line"></span>
				
				<span class="att_title"><?php the_field( 'section_three_awards_title' ); ?></span><!-- att_title -->
				
				<span class="line"></span>
				
			</div><!-- sec_three_awards_title -->
			
			<div class="sec_three_awards_slideshow_wrapper">
				
				<div class="sec_three_awards_button_left sec_three_awards_button"></div><!-- sec_three_awards_button -->
				
				<div class="sec_three_slideshow">
					
					<?php if(get_field('section_three_awards_slider')): ?>
					 
						<?php while(has_sub_field('section_three_awards_slider')): ?>
					 
								<div class="att_single_slide">
						
									<?php $awards_logo = get_sub_field( 'awards_logo' ); ?>
									
									<?php if ( $awards_logo ) { ?>
									
									<img data-src="<?php echo $awards_logo['url']; ?>" alt="<?php echo $awards_logo['alt']; ?>" />
									
									<?php } ?>
									
								</div><!-- att_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					    
					</div><!-- sec_three_awards_slideshow -->
				
				<div class="sec_three_awards_button_right sec_three_awards_button"></div><!-- sec_three_awards_button -->
				
			</div><!-- sec_three_awards_wrapper -->
			
		</div><!-- sec_three_awards_wrapper -->
	
</section><!-- section_three -->