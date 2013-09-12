<?php
/**
 * Template Name: Online Degrees
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="content">	

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h2 class="mar-top-0 mar-bot-4"><?php the_title(); ?></h2>	
		
		<div class="grid-wrap">
			<div class="grid-col bp3-col-1-2">
				<div class="grid-wrap">
					<div class="grid-col bp1-col-1-2">
						<div class="featured-degree mar-bot-10">
							<a href="<?php bloginfo('url'); ?>/employee-benefits"><img class="mar-bot-1 img-bdr-1 img-full-width" alt="Employee Benefits Programs" src="<?php echo get_stylesheet_directory_uri();?>/images/eb-thumb.jpg"></a>
							<a href="<?php bloginfo('url'); ?>/employee-benefits"><h3>Employee Benefits</h3></a>
							<p>The John Marshall Law School offers lawyers and non-lawyer employee benefits professionals the only Graduate Employee Benefits degrees in the country. </p>
						</div>
					</div>
				  					
					<div class="grid-col bp1-col-1-2">		
						<div class="featured-degree mar-bot-10">
							<a href="<?php bloginfo('url'); ?>/estate-planning"><img class="mar-bot-1 img-bdr-1 img-full-width" alt="Estate Planning Programs" src="<?php echo get_stylesheet_directory_uri();?>/images/ep-thumb.jpg"></a>
							<a href="<?php bloginfo('url'); ?>/estate-planning"><h3>Estate Planning</h3></a>
							<p>The John Marshall Law School&rsquo;s Center for Tax Law and Employee Benefits offers an entirely online LLM in Estate Planning, taught by experts from around the nation.</p>
						</div>
					</div>
				</div> <!-- /.grid-wrap -->
			</div>					
						
			<div class="grid-col bp3-col-1-2">
				<div class="grid-wrap">
					<div class="grid-col bp1-col-1-2">		
						<div class="featured-degree mar-bot-10">
							<a href="<?php bloginfo('url'); ?>/information-technology-privacy-law"><img class="mar-bot-1 img-bdr-1 img-full-width" alt="Information Technology and Privacy Law Programs" src="<?php echo get_stylesheet_directory_uri();?>/images/it-thumb.jpg"></a>
							<a href="<?php bloginfo('url'); ?>/information-technology-privacy-law"><h3>Information Technology &amp; Privacy Law</h3></a>
							<p>John Marshall offers the most comprehensive Graduate Information Technology and Privacy Law Programs, taught by the country&rsquo;s leading scholars and practitioners.</p>
						</div>
					</div>	
					
					<div class="grid-col bp1-col-1-2">			
						<div class="featured-degree mar-bot-10">
							<a href="<?php bloginfo('url'); ?>/intellectual-property-law"><img class="mar-bot-1 img-bdr-1 img-full-width" alt="Intellectual Property Law Programs" src="<?php echo get_stylesheet_directory_uri();?>/images/ip-thumb.jpg"></a>
							<a href="<?php bloginfo('url'); ?>/intellectual-property-law"><h3>Intellectual Property Law</h3></a>
							<p>John Marshall&rsquo;s nationally ranked Graduate Intellectual Property Law Programs offer comprehensive training for graduate degree candidates.</p>
						</div>
					</div>
				</div> <!-- /.grid-wrap -->
			</div>					
		</div> <!-- /.grid-wrap -->
		
		<?php endwhile; ?>	

	</div>	
	<div class="post-content-spacer"></div>
	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>