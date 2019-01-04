<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="att_bio_wrapper">
		
		<div class="internal_header">
			
			<h1><?php the_title();?></h1>
			
			<div class="header_meta">
				
				<?php if(get_field('position')) : ?>
				
					<span><?php the_field( 'position' ); ?></span>
				
				<?php endif;?>
				
				<?php if(get_field('year_began')) : ?>
				
					<span><?php the_field( 'year_began' ); ?></span>
				
				<?php endif;?>
				
				<?php if(get_field('city_location')) : ?>
				
					<span><?php the_field( 'city_location' ); ?></span>
				
				<?php endif;?>
				
			</div><!-- header_meta -->
			
		</div><!-- internal_header -->
		
		<div class="att_bio_inner">
		
			<div class="att_sidebar">
				
				<?php $attorney_image = get_field( 'attorney_image' ); ?>
				
				<?php if ( $attorney_image ) : ?>
				
					<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
					<?php else:?>
					
					<img src="<?php bloginfo('template_directory');?>/images/profile-placeholder.jpg"/>
				
				<?php endif; ?>
				
				
				
				<ul>
					<li class="pa_title">Practice Areas</li>
					<li class="pa_list"><a  href="">Plaintiff’s Personal Injury</a></li>
					<li class="pa_list"><a  href="">Plaintiff’s Personal Injury</a></li>
					<li class="pa_list"><a  href="">Plaintiff’s Personal Injury</a></li>
					<li class="pa_list"><a  href="">Plaintiff’s Personal Injury</a></li>
					<li class="pa_list"><a  href="">Plaintiff’s Personal Injury</a></li>
				</ul>
				
			</div><!-- att_sidebar -->
		
			<div class="att_content content">
				
				<?php if ( $attorney_image ) : ?>
				
					<img class="att_profile_mobile" src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
					<?php else:?>
					
					<img class="att_profile_mobile" src="<?php bloginfo('template_directory');?>/images/profile-placeholder.jpg"/>
				
				<?php endif; ?>
				
				
				<?php the_field( 'attorney_content' ); ?>

				
				<div class="verdict_wrapper">
				
				<?php if(get_field('attorney_bullet_list')): ?>
				
					<?php while(has_sub_field('attorney_bullet_list')): ?>
				 
						<div class="verdict_inner">
					
							<h2><?php the_sub_field( 'title' ); ?></h2>
					
							<ul>
								
								<?php if(get_sub_field('bullet_list_items')): ?>
								 
									<?php while(has_sub_field('bullet_list_items')): ?>
								 
										<li><?php the_sub_field( 'bullet_list_item' ); ?></li>
								    
									<?php endwhile; ?>
								 
								<?php endif; ?>
							
							</ul>
					
					</div><!-- verdict_inner -->
				    
					<?php endwhile; ?>
					
				<?php endif; ?>
				
				<?php if(get_field('attorney_bullet_list_h3')): ?>
				
					<?php while(has_sub_field('attorney_bullet_list_h3')): ?>
				 
						<div class="verdict_inner">
					
							<h3><?php the_sub_field( 'title' ); ?></h3>
					
							<ul>
								
								<?php if(get_sub_field('bullet_list_items')): ?>
								 
									<?php while(has_sub_field('bullet_list_items')): ?>
								 
										<li><?php the_sub_field( 'bullet_list_item' ); ?></li>
								    
									<?php endwhile; ?>
								 
								<?php endif; ?>
							
							</ul>
					
					</div><!-- verdict_inner -->
				    
					<?php endwhile; ?>
					
				<?php endif; ?>
				
				</div><!-- verdict_wrapper -->
	
			
			</div><!-- att_content -->
		
		</div><!-- att_bio_inner -->
		
		<div class="att_awards_wrapper">
			
			<div class="att_awards_title_wrapper">
				
				<span class="line"></span>
				
				<span class="att_title"><?php the_field( 'awards_title' ); ?></span><!-- att_title -->
				
				<span class="line"></span>
				
			</div><!-- att_awards_title -->
			
			<div class="att_awards_slideshow_wrapper">
				
				<div class="att_awards_button_left att_awards_button"></div><!-- att_awards_button -->
				
				<div class="att_awards_slideshow">
					
					<?php if(get_field('attorney_awards')): ?>
					 
						<?php while(has_sub_field('attorney_awards')): ?>
					 
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
		
	</div><!-- att_bio_wrapper -->
	
</div><!-- container -->



</div><!-- internal_main -->



	<?php // get_template_part( 'loop', 'page' ); ?>
					 
					 	
<?php get_footer(); ?>
