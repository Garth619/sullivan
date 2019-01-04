<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="internal_header">
			
		<h1><?php the_title();?></h1>
			
	</div><!-- internal_header -->
	
	<div class="meet_team_selector">
		
		<ul>
			<li class="active" data-tab="members">Members</li>
			<li data-tab="counsel">Counsel</li>
			<li data-tab="associates">Associates</li>
		</ul>
		
	</div><!-- meet_team_selector -->
	
	
	<div class="meet_team_tabs">
	
	<div class="tab members">
	
	<div class="meet_the_team_wrapper">
		
		
		<?php $members = get_field( 'members' ); ?>
		<?php if ( $members ): ?>
		<?php foreach ( $members as $post ):  ?>
			<?php setup_postdata ( $post ); ?>
			
			
			
				<div class="single_meet_team">
					
					<a href="<?php the_permalink();?>">
			
					<div class="single_meet_team_inner">
				
					<div class="meet_att_image">
						
						<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
						<?php if ( $attorney_image ) : ?>
				
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
							<?php else:?>
					
							<img src="<?php bloginfo('template_directory');?>/images/profile-placeholder.jpg"/>
				
						<?php endif; ?>
					
					</div><!-- meet_att_image -->
				
				</div><!-- single_meet_team_inner -->
			
				<span class="meet_att_name"><?php the_title();?></span><!-- meet_att_name -->
			
				<span class="meet_position"><?php the_field( 'position' ); ?></span><!-- meet_position -->
				
				</a>
			
			</div><!-- single_meet_team -->
			
			
			<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		</div><!-- meet_the_team_wrapper -->
	
	</div><!-- tab -->
	
	
	
	
	<div class="tab counsel">
	
	
	<div class="meet_the_team_wrapper">
		
		
		<?php $counsel = get_field( 'counsel' ); ?>
		<?php if ( $counsel ): ?>
			<?php foreach ( $counsel as $post ):  ?>
			<?php setup_postdata ( $post ); ?>
			
				<div class="single_meet_team">
					
					<a href="<?php the_permalink();?>">
			
					<div class="single_meet_team_inner">
				
					<div class="meet_att_image">
						
						<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
						<?php if ( $attorney_image ) : ?>
				
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
							<?php else:?>
					
							<img src="<?php bloginfo('template_directory');?>/images/profile-placeholder.jpg"/>
				
						<?php endif; ?>
					
					</div><!-- meet_att_image -->
				
				</div><!-- single_meet_team_inner -->
			
				<span class="meet_att_name"><?php the_title();?></span><!-- meet_att_name -->
			
				<span class="meet_position"><?php the_field( 'position' ); ?></span><!-- meet_position -->
				
				</a>
			
			</div><!-- single_meet_team -->
			
			<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
				
	</div><!-- meet_the_team_wrapper -->
	
	</div><!-- tabs -->
	

	
	
	<div class="tab associates">
	
	
	<div class="meet_the_team_wrapper">
		
		
		
		<?php $associates = get_field( 'associates' ); ?>
		<?php if ( $associates ): ?>
			<?php foreach ( $associates as $post ):  ?>
			<?php setup_postdata ( $post ); ?>
			
					
					<div class="single_meet_team">
					
					<a href="<?php the_permalink();?>">
			
					<div class="single_meet_team_inner">
				
					<div class="meet_att_image">
						
						<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
						<?php if ( $attorney_image ) : ?>
				
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
							<?php else:?>
					
							<img src="<?php bloginfo('template_directory');?>/images/profile-placeholder.jpg"/>
				
						<?php endif; ?>
					
					</div><!-- meet_att_image -->
				
				</div><!-- single_meet_team_inner -->
			
				<span class="meet_att_name"><?php the_title();?></span><!-- meet_att_name -->
			
				<span class="meet_position"><?php the_field( 'position' ); ?></span><!-- meet_position -->
				
				</a>
			
			</div><!-- single_meet_team -->
			
			
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		
				
	</div><!-- meet_the_team_wrapper -->
	
	
	</div><!-- tab -->
	
	</div><!-- meet_team_tabs -->
	
</div><!-- container -->


</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
