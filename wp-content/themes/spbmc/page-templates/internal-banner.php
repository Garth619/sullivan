<div class="internal_banner">
	
	<?php $banner_image = get_field( 'banner_image', 'option' ); ?>
	
	<?php if ( $banner_image ) { ?>
	
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
	
	<?php } ?>
	
	<div class="internal_banner_content">
		
		<span class="large_header"><?php the_field( 'banner_verbiage', 'option' ); ?></span><!-- large_header -->
		
		<a class="button" href="#consultation">Click for free consultation</a>
		
	</div><!-- internal_banner_content -->
	
</div><!-- internal_banner -->