<section id="section_one">
	
	<img class="desktop hero" src="<?php bloginfo('template_directory');?>/images/hero.jpg"/>
	
	<img class="tablet hero" src="<?php bloginfo('template_directory');?>/images/hero-ipad.jpg"/>
	
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