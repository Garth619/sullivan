<section id="section_two" data-src="<?php bloginfo('template_directory');?>/images/pattern_tile.png">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_slideshow_wrapper">
			
			<div class="sec_two_button_left sec_two_button"></div><!-- sec_two_button_left -->
			
			<div class="sec_two_slidehow">
				
				<?php if(get_field('sec_two_case_results')): ?>
				 
					<?php while(has_sub_field('sec_two_case_results')): ?>
				 
						<div class="sec_two_single_slide">
					
							<div class="sec_two_single_inner">
						
								<div class="sec_two_border">
									
									<?php if(get_sub_field('case_results_svg') == "Verdict Health"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-01.svg"/>
									
									<?php endif;?>
									
									<?php if(get_sub_field('case_results_svg') == "Verdict Fire"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-03.svg"/>
									
									<?php endif;?>
									
									<?php if(get_sub_field('case_results_svg') == "Verdict Crane"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-crane.svg"/>
									
									<?php endif;?>
									
									<?php if(get_sub_field('case_results_svg') == "Verdict Police"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-police.svg"/>
									
									<?php endif;?>
									
									<?php if(get_sub_field('case_results_svg') == "Verdict Tree"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-tree.svg"/>
									
									<?php endif;?>
									
									<?php if(get_sub_field('case_results_svg') == "Settlement"):?>
							
										<img data-src="<?php bloginfo('template_directory');?>/images/results-02.svg"/>
									
									<?php endif;?>
							
									<span class="amount"><?php the_sub_field( 'amount' ); ?></span><!-- amount -->
							
									<span class="type"><?php the_sub_field( 'type' ); ?></span><!-- type -->
							
								</div><!-- sec_two_border -->
						
							</div><!-- sec_two_single_inner -->
					
							<div class="sec_two_hover">
						
								<div class="sec_two_hover_inner">
							
								<span class="sec_two_content"><?php the_sub_field( 'description' ); ?></span><!-- sec_two_content -->
							
								<a class="view_all" href="<?php the_field( 'section_two_case_result_page_link' ); ?>">View All Results</a>
							
							</div><!-- sec_two_hover_inner -->
						
						</div><!-- sec_two_hover -->
					
					</div><!-- sec_two_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
				
			</div><!-- sec_two_slidehow -->
			
			<div class="sec_two_button_right sec_two_button"></div><!-- sec_two_button_right -->
			
		</div><!-- sec_two_slideshow_wrapper -->
		
		<span class="disclaimer"><?php the_field( 'section_two_disclaimer' ); ?></span>
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->