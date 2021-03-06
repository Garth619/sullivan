<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800|Prata');

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_left">
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
			<div class="close"></div><!-- close -->
			
		</div><!-- header_left -->
		
		<div class="header_middle">
			
			<a href="<?php bloginfo('url');?>">
				
				<?php $desktop_logo = get_field( 'desktop_logo', 'option' ); ?>
				
				<?php if ( $desktop_logo ) { ?>
				
				<img class="desktop" src="<?php echo $desktop_logo['url']; ?>" alt="<?php echo $desktop_logo['alt']; ?>" />
				
				<?php } ?>
				
				<?php $tablet_logo = get_field( 'tablet_logo', 'option' ); ?>

				<?php if ( $tablet_logo ) { ?>
				
				<img class="tablet" src="<?php echo $tablet_logo['url']; ?>" alt="<?php echo $tablet_logo['alt']; ?>" />
				
				<?php } ?>
	
				<?php $mobile_logo = get_field( 'mobile_logo', 'option' ); ?>
				
				<?php if ( $mobile_logo ) { ?>
				
				<img class="mobile" src="<?php echo $mobile_logo['url']; ?>" alt="<?php echo $mobile_logo['alt']; ?>" />
				
				<?php } ?>
				
			</a>
			
		</div><!-- header_middle -->
			
		<div class="header_right">
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
			<div class="close"></div><!-- close -->
			
			<div class="consult_phone_wrapper">
				
				<span class="desktop">Call Today For a Free Consultation</span><!-- desktop -->
				
				<span class="mobile">Call For a Free Consultation</span><!-- mobile -->
				
				<a href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_main_phone', 'option')); ?>"><?php the_field( 'firm_main_phone', 'option' ); ?></a>
				
			</div><!-- consult_phone_wrapper -->
			
			<div class="internal_no_banner_consult">
				
				<a class="" href="#consultation">Click For Free Consultation</a>
				
			</div><!-- internal_no_banner_consult -->
			
		</div><!-- header_right -->	
		
	</header>
	
	<div class="sticky_nav">
		
		<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span><!-- menu_title -->
				
			</div><!-- menu_wrapper -->
			
			<div class="close"></div><!-- close -->
			
			<div class="consult_phone_wrapper">
				
				<span class="desktop">Call Today For a Free Consultation</span><!-- desktop -->
				
				<span class="mobile">Call For a Free Consultation</span><!-- mobile -->
				
				<a href="tel:<?php the_field( 'firm_main_phone', 'option' ); ?>"><?php the_field( 'firm_main_phone', 'option' ); ?></a>
				
			</div><!-- consult_phone_wrapper -->
		
	</div><!-- sticky_nav -->
	
	<nav>
		
		<div class="close"></div><!-- close -->
		
		<div class="nav_inner">
			
			<div class="nav_col nav_col_one">
				
				<a class="" href="<?php bloginfo('url');?>">
					
					<?php $desktop_logo_navigation = get_field( 'desktop_logo_navigation', 'option' ); ?>
					
					<?php if ( $desktop_logo_navigation ) { ?>
					
					<img src="<?php echo $desktop_logo_navigation['url']; ?>" alt="<?php echo $desktop_logo_navigation['alt']; ?>" />
					
					<?php } ?>
					
				</a>
				
			</div><!-- nav_col -->
			
			<div class="nav_col nav_col_two">
				
				<div class="nav_col_inner">
				
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
				</div><!-- nav_col_inner -->
				
				<div class="nav_col_inner">
				
					
					<div class="nav_clone"></div><!-- nav_clone -->
					
				
				</div><!-- nav_col_inner -->
			
			</div><!-- nav_col -->
			
						
		</div><!-- nav_inner -->
		
	</nav>
	
	

			