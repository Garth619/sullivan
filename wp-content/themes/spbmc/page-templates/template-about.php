<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="about_page_wrapper">
		
		<div class="about_left">
			
			<div class="image_caption_wrapper">
			
				<?php $about_page_image = get_field( 'about_page_image' ); ?>
				
				<?php if ( $about_page_image ) { ?>
				
				<img src="<?php echo $about_page_image['url']; ?>" alt="<?php echo $about_page_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="image_caption">
					
					<?php if(get_field('about_image_caption')): ?>
					 
						<?php while(has_sub_field('about_image_caption')): ?>
					 
							<span><?php the_sub_field( 'text_line' ); ?></span> 
										    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
				</div><!-- image_caption -->
			
			</div><!-- image_caption_wrapper -->
			
		</div><!-- about_left -->
		
		<div class="about_right">
			
			<h1><?php the_title();?></h1>
			
			<div class="about_content content">
				
				<?php the_field( 'about_content' ); ?>
				
			</div><!-- about_content -->
			
		</div><!-- about_right -->
		
	</div><!-- about_page_wrapper -->
	
	<div class="about_blockquote">
		
		<?php $about_blockquote_svg = get_field( 'about_blockquote_svg' ); ?>
		
		<?php if ( $about_blockquote_svg ) { ?>
		
		<img src="<?php echo $about_blockquote_svg['url']; ?>" alt="<?php echo $about_blockquote_svg['alt']; ?>" />
		
		<?php } ?>
		
		<div class="about_blockquote_content">
			
			<?php the_field( 'about_blockquote_content' ); ?>
			
		</div><!-- about_blockquote_content -->
		
	</div><!-- about_blockquote -->
	
	<div class="about_bottom content">
		
		<?php the_field( 'about_bottom_content' ); ?>
		
	</div><!-- about_bottom -->
	
	<div class="att_awards_wrapper about_slider_wrapper">
			
			<div class="att_awards_title_wrapper about_awards_title_wrapper">
				
				<span class="line"></span>
				
				<span class="att_title"><?php the_field( 'about_awards_title' ); ?></span><!-- att_title -->
				
				<span class="line"></span>
				
			</div><!-- att_awards_title -->
			
			<div class="att_awards_slideshow_wrapper">
				
				<div class="att_awards_button_left att_awards_button"></div><!-- att_awards_button -->
				
				<div class="att_awards_slideshow">
					
					<?php if(get_field('about_awards')): ?>
					 
						<?php while(has_sub_field('about_awards')): ?>
					 
							<div class="att_single_slide">
						
								<?php $image = get_sub_field( 'image' ); ?>
								
								<?php if ( $image ) { ?>
									
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									
								<?php } ?>
						
							</div><!-- att_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
										
				</div><!-- att_awards_slideshow -->
				
				<div class="att_awards_button_right att_awards_button"></div><!-- att_awards_button -->
				
			</div><!-- att_awards_wrapper -->
			
		</div><!-- att_awards_wrapper -->
		
	</div><!-- container -->


</div><!-- internal_main -->

					 
					 	
<?php get_footer(); ?>
