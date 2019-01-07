<footer id="footer_trigger">
	
	<div id="consultation" class="footer_form" data-src="<?php bloginfo('template_directory');?>/images/pattern_tile.png">
		
		<div class="footer_form_inner">
			
			<div class="form_border">
				
				<div class="form_max_width">
			
				<span class="form_header">Free Case Evaluation</span><!-- form_header -->
			
				<span class="small_form_header">Our fee is on a contingency basis. If we don’t recover money for you, we will never charge you. If you are unable to come to any of our offices, we are happy to visit you at home or in the hospital.</span><!-- small_form_header -->
			
				<span class="required">*Field Required</span><!-- required -->
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
				</div><!-- form_max_width -->
			
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
		
		<a class="button location_button" href="">View All Locations</a>
		
	</div><!-- location_wrapper -->
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<div class="copyright_col">
				
				<ul class="copyright">
					<li>Copyright &copy; 2018 - SPBMC,P.C.</li>
					<li>
						<a href="">Disclaimer</a>
						<a href="">Sitemap</a>
						<a href="">Google+</a>
					</li>
				</ul>
				
			</div><!-- copyright_col -->
			
			<div class="copyright_col">
				
				<a class="" href="<?php bloginfo('url');?>">
					
					<img data-src="<?php bloginfo('template_directory');?>/images/logo-blue-spbmc.svg"/>
					
				</a>
				
			</div><!-- copyright_col -->
			
			<div class="copyright_col">
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
					
					<img data-src="<?php bloginfo('template_directory');?>/images/ilawyer.svg"/>
					
				</a>
				
			</div><!-- copyright_col -->
			
		</div><!-- copyright_inner -->
	
	</div><!-- copyright_wrapper -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
