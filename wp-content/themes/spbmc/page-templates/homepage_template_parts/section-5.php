<section id="section_five">
	
	<div class="sec_five_header">
			
			<span class="top"><?php the_field( 'section_five_header_one' ); ?></span>
			<span class="middle"><?php the_field( 'section_five_header_two' ); ?></span>
			<span class="bottom"><?php the_field( 'section_five_header_three' ); ?></span>
			
		</div><!-- sec_five_header -->
		
		<div class="sec_five_content top content">
			
			<a class="button mobile_pa_button" href="<?php the_field( 'section_five_pa_page_link' ); ?>"><?php the_field( 'section_five_pa_verbiage' ); ?></a>
			
			<?php the_field( 'section_five_content_top' ); ?>
			
		</div><!-- sec_five_content -->
		
		<div class="sec_five_image_wrapper">
			
			<div class="sec_five_image_one">
				
				<?php $section_five_desktop_image = get_field( 'section_five_desktop_image' ); ?>

				<img class="desktop" data-src="<?php echo $section_five_desktop_image['url']; ?>" alt="<?php echo $section_five_desktop_image['alt']; ?>" />

				<?php $section_five_tablet_image = get_field( 'section_five_tablet_image' ); ?>
				
				<img class="tablet" data-src="<?php echo $section_five_tablet_image['url']; ?>" alt="<?php echo $section_five_tablet_image['alt']; ?>" />
				
				<?php $section_five_mobile_image = get_field( 'section_five_mobile_image' ); ?>
				
				<img class="mobile" data-src="<?php echo $section_five_mobile_image['url']; ?>" alt="<?php echo $section_five_mobile_image['alt']; ?>" />
							
			</div><!-- sec_five_image -->
			
						
			<div class="sec_five_image_cap">
				
				<div class="est_wrapper">
					
					<span class="est"><?php the_field( 'section_five_est' ); ?></span>
					
					<span class="year"><?php the_field( 'section_five_year_est' ); ?></span>
					
				</div><!-- est_wrapper -->
				
				<div class="sec_five_blue_cap">
				
				<span><?php the_field( 'section_five_blue_caption' ); ?></span>
				
			</div><!-- sec_five_blue_cap -->
				
		</div><!-- sec_five_image_cap -->
			
	</div><!-- sec_five_image_wrapper -->
		
	<div class="sec_five_content bottom content">
		
		<?php the_field( 'section_five_content_bottom' ); ?> 
		
	</div><!-- sec_five_content_bottom -->
	
</section><!-- section_five -->