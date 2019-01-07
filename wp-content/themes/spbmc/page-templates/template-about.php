<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main" class="">


<div class="container no_banner_col">
	
	<div class="about_page_wrapper">
		
		<div class="about_left">
			
			<div class="image_caption_wrapper">
			
				<img src="<?php bloginfo('template_directory');?>/images/img-about.jpg"/>
				
				<div class="image_caption">
					
					<div>Spbmc Has Recovered</div> 
					
					<div>over $2 Billion in the</div>
					
					<div>Last 10 Years</div>
					
				</div><!-- image_caption -->
			
			</div><!-- image_caption_wrapper -->
			
		</div><!-- about_left -->
		
		<div class="about_right">
			
			<h1><?php the_title();?></h1>
			
			<div class="about_content content">
				
				<p>As a complete New York City personal injury firm, Sullivan Papain Block McGrath & Cannavo P.C. specializes in all areas of personal injury. Within each personal injury department, we have created litigation and support teams. Our specialized departments diligently and vigorously represent clients who have been injured in automobile accidents or who were struck as pedestrians, or who have been the victims of medical malpractice or who have been injured on construction sites or by municipal misconduct or by defective products or by toxic substances. We also represent victims of asbestos and other environmental hazards, breast implants, unsafe pharmaceutical drugs, aviation accidents, maritime accidents and lead poisoning.</p>
				
				<h2>Legal Experience</h2>
				
				<p>We are proud to serve our clients in all areas of personal injury law. We are able to offer of this unique service because of our size, scope of organization and wealth of resources. Above all, we deeply believe in our commitment to serve and satisfy our clients.
We will treat you with respect and compassion. We will aggressively fight for your rights and for the highest possible compensation for you. Our attorneys possess the skill and experience that you need. You will receive vigorous, uncompromising and skillful representation. We are dedicated and hard-working and we are at all times mindful of our duty and obligation to you.</p>
				
			</div><!-- about_content -->
			
		</div><!-- about_right -->
		
	</div><!-- about_page_wrapper -->
	
	<div class="about_blockquote">
		
		<img src="<?php bloginfo('template_directory');?>/images/results-02.svg"/>
		
		<div class="about_blockquote_content">
			
			SPBMC was one of only six firms in the country to represent the State of New York in its litigation against the major tobacco companies. Our efforts helped the state to obtain an historic $25 Billion recovery and unprecedented public health benefits which are expected to save thousands of lives.
			
		</div><!-- about_blockquote_content -->
		
	</div><!-- about_blockquote -->
	
	<div class="about_bottom content">
		
		<h2>Legal Experience</h2>
		
		<p>In addition to handling many thousands of individual claims, Sullivan Papain Block McGrath & Cannavo P.C. is either currently serving or has successfully served as Lead Plaintiff’s Counsel in cases involving: 9/11 rescue and recovery workers litigation, Kaltech chemical explosion, 1993 World Trade Center bombing, HIV-infected hemophiliacs, Washington Square Park crash, Staten Island tank explosion, MGM Grand hotel fire, and the Anne Street explosion.</p>

		<p>SPBMC was one of only six firms in the country to represent the State of New York in its litigation against the major tobacco companies. Our efforts helped the state to obtain an historic $25 Billion recovery and unprecedented public health benefits which are expected to save thousands of lives</p>

		<p>The firm also had the honor of representing the families of 363 brave firefighters who gave up their lives on 9/11. We secured more than $265 Million for the families and we did not charge any legal fee.</p>
		
		<p>We represented more than 600 heroic firefighters sickened by exposures at the World Trade Center disaster site. As Co-Liaison Counsel, we assumed a leading role in the World Trade Center Disaster Site Litigation. After a long and difficult fight to obtain compensation for all of these brave individuals, on the eve of trial we helped secure a more than $600 Million settlement.</p>

		<p>Our success in these areas shows that no litigation is too large or complex for us to handle. Yet we have never lost sight of the fact that each client deserves the individual and personal care and attention which is a hallmark of our practice.</p>

		<p>Our verdicts and recoveries speak for themselves and are consistently among the highest in the State. In the last 10 years, we have recovered over $2 Billion for individuals injured and for families of those who have died due to the wrongful acts of others.</p>
		
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
