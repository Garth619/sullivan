<section id="section_one">
	
	
	<?php $section_one_image = get_field( 'section_one_image' ); ?>
	
	<?php $section_one_image_webp = get_field( 'section_one_image_webp' ); ?>

	<img class="desktop hero" data-jpg="<?php echo $section_one_image['url']; ?>" data-webp="<?php echo $section_one_image_webp['url']; ?>" alt="<?php echo $section_one_image['alt']; ?>"/>
	
	
	<span class="trackline"></span><!-- trackline -->
	
	<div class="sec_one_inner">
		
		<div class="large_header">
			
			<span class="top_line"><?php the_field( 'header_one' ); ?></span>
			
			<span class="top_line"><?php the_field( 'header_two' ); ?></span>
		
		</div><!-- large_header -->
		
		<div class="small_header">
			
			<?php if(get_field('sec_one_bullets')): ?>
			 
				<?php while(has_sub_field('sec_one_bullets')): ?>
			 
					<div class="small_header_single">
				
						<span><?php the_sub_field( 'bullet' ); ?></span>     
				
					</div><!-- small_header_single -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- small_header -->
		
		<a class="sec_one_click button" href="#consultation">Click For Free Consultation</a>
		
	</div><!-- sec_one_inner -->

	
</section><!-- section_one -->