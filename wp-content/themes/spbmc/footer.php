<footer id="footer_trigger">
	
	<div id="consultation" class="footer_form" data-src="<?php bloginfo('template_directory');?>/images/pattern_tile.png">
		
		<div class="footer_form_inner">
			
			<div class="form_border">
				
				<div class="form_inner">
				
				<div class="form_max_width">
			
				<span class="form_header"><?php the_field( 'free_case_form_title', 'option' ); ?></span><!-- form_header -->
			
				<span class="small_form_header"><?php the_field( 'free_case_verbiage', 'option' ); ?></span><!-- small_form_header -->
			
				<span class="required">*Field Required</span><!-- required -->
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
				</div><!-- form_max_width -->
				
				</div><!-- form_inner -->
			
			</div><!-- form_border -->
			
		</div><!-- footer_form_inner -->
		
	</div><!-- footer_form -->
	
	<div class="location_wrapper">
		
		<div class="location_inner">
			
			<?php if(get_field('footer_locations','option')): ?>
			 
				<?php while(has_sub_field('footer_locations','option')): ?>
			 
						<div class="single_location">
				
							<span class="location_title"><?php the_sub_field( 'firm_title' ); ?></span><!-- location_title -->
				
							<span class="address"><?php the_sub_field( 'firm_street_address' ); ?></span><!-- address -->
				
							<a class="directions" href="<?php the_sub_field( 'firm_directions_link' ); ?>" target="_blanl" rel="noopener">Get Directions</a><!-- directions -->
				
							<span class="phone_title">Phone</span><!-- phone_title -->
				
							<a class="location_phone" href=""><?php the_sub_field( 'firm_phone' ); ?></a><!-- location_phone -->
				
							<span class="phone_title">Fax</span><!-- phone_title -->
				
							<a class="location_phone" href=""><?php the_sub_field( 'firm_fax' ); ?></a><!-- location_phone -->
				
						</div><!-- single_location -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		</div><!-- location_inner -->
		
		<a class="button location_button" href="<?php the_field( 'view_all_locations_link', 'option' ); ?>">View All Locations</a>
		
	</div><!-- location_wrapper -->
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<div class="copyright_col">
				
				<ul class="copyright">
					<li><?php the_field( 'copyright', 'option' ); ?></li>
					<li>
					<?php if(get_field('copyright_bullets','option')): ?>
					 
						<?php while(has_sub_field('copyright_bullets','option')): ?>
						
							<?php if(get_sub_field('open_in_new_tab') == "Yes") : ?>
					 
								<a href="<?php the_sub_field( 'page_link' ); ?>" target="_blank" rel="noopener"><?php the_sub_field( 'title' ); ?></a>
								
								<?php else:?>
								
								<a href="<?php the_sub_field( 'page_link' ); ?>"><?php the_sub_field( 'title' ); ?></a>
							
							<?php endif;?>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>

					</li>
				</ul>
				
			</div><!-- copyright_col -->
			
			<div class="copyright_col">
				
				<a class="" href="<?php bloginfo('url');?>">
					
					<?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
					
					<?php if ( $footer_logo ) { ?>
					
					<img data-src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
					
					<?php } ?>
					
				</a>
				
			</div><!-- copyright_col -->
			
			<div class="copyright_col">
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
					
					<img data-src="<?php bloginfo('template_directory');?>/images/ilawyer.svg" alt="iLawyer Marketing Logo"/>
					
				</a>
				
			</div><!-- copyright_col -->
			
		</div><!-- copyright_inner -->
	
	</div><!-- copyright_wrapper -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
