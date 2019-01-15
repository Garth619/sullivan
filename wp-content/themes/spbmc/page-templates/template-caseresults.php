<?php 

/* Template Name: Case Results */

get_header(); ?>


<div id="internal_main" class="">



	<div class="internal_header">
			
			<h1><?php the_title();?></h1>
			
			<div class="header_meta">
				
				<span>Jury Verdicts</span>
				
				<span>Settlements</span>
				
			</div><!-- header_meta -->
			
	</div><!-- internal_header -->

	<div class="container two_col">
	
	
	<div class="sidebar_wrapper case_results">
	
		<div class="sidebar">
	
			<div class="sidebar_inner">
			
				<div class="sidebar_border">
					
					
					<?php if(get_field('case_results_page')): ?>
						
						<ul class="menu">
					 
						<?php while(has_sub_field('case_results_page')): ?>
						
						
							<?php 
								
								$sidebartitle = get_sub_field('top_level_title');
								
								$rules[] = ",";
								$rules[] = " ";
								$rules[] = "'";
						
								$datatag = (str_replace($rules, "-", strtolower($sidebartitle))); 
						
								echo '<li data-caseresult="' . $datatag . '">' . $sidebartitle . '</li>';?>
					 
							
					    
						<?php endwhile; ?>
						
						</ul><!-- menu -->
					 
					<?php endif; ?>
					
			
				</div><!-- sidebar_border -->
		
			</div><!-- sidebar_inner -->
	
		</div><!-- sidebar -->
	
	</div><!-- sidebar_wrapper -->

	
	<div class="content_wrapper">
		
		
		<?php if(get_field('case_results_page')): ?>
		
			<div class="case_results_tabs">
		
				<ul class="top_level">
		 
				<?php while(has_sub_field('case_results_page')): ?>
				
					<?php 
								
						$sidebartitle = get_sub_field('top_level_title');
								
						$rules[] = ",";
						$rules[] = " ";
						$rules[] = "'";
						
						$datatag = (str_replace($rules, "-", strtolower($sidebartitle))); 
						
					?>
		 
					<li class="top_level_tab">
					
						<span class="top_level_tab_title">
				
							<span><?php the_sub_field( 'top_level_title' ); ?></span>
				
						</span><!-- top_level_tab_title -->
						
						<?php if(get_sub_field('second_level')): ?>
							
								<ul class="second_level">
						 
								<?php while(has_sub_field('second_level')): ?>
						 
									<li class="secondary_tab <?php echo $datatag;?>">
						
										<span class="tab_title">
						
											<span><?php the_sub_field( 'second_level_title' ); ?></span>
							
										</span><!-- tab_title -->
						
										<div class="tab_title_content content">
							
											<span class="tab_amount"><?php the_sub_field( 'amount' ); ?></span><!-- tab_amount -->
							
											<?php the_sub_field( 'content' ); ?>
						
										</div><!-- tab_title_content -->
					
									</li><!-- secondary_tab -->
						    
								<?php endwhile; ?>
								
								</ul><!-- second_level -->
						 
						<?php endif; ?>
					
					</li><!-- top_level_tab -->
		    
				<?php endwhile; ?>
			
				</ul><!-- top_level -->
				
			</div><!-- case_results_tabs -->
		 
		<?php endif; ?>
		
		
	</div><!-- content_wrapper -->
	
	
</div><!-- container -->

</div><!-- internal_main -->


<?php get_footer(); ?>
