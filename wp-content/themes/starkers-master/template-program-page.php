<?php
/**
 * Template Name: Program Page
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>	

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="grid-wrap">
		<div class="grid-col col-1-1">
			<div class="program-banner-wrap hide-below-bp1">	
				<div class="program-banner">
					<?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail('full'); }
					?>	
					<div class="program-banner-overlay">
					<?php if( get_post_meta($post->ID, 'banner-text', true) ) { ?>
						<?php echo get_post_meta($post->ID, 'banner-text', true); ?>
					<?php } ?>
					</div>
				</div>		
			</div>
		</div>
	</div> <!-- /.grid-wrap -->
	
	<div class="content">		
	
		<div class="grid-wrap">
			<div class="grid-col bp1-col-2-3 bp3-col-7-12">	
				<!-- Display the custom H1 page-real-title only if it exists -->
				<?php if( get_post_meta($post->ID, 'page-real-title', true) ) { ?>
					<h1 class="page-real-title delta mar-top-0"><?php echo get_post_meta($post->ID, 'page-real-title', true); ?></h1>
				<?php } ?>
				<!---->
				<h2 class="mar-top-0 page-main-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>				
			</div>
				
			<div class=" grid-col bp1-col-1-3 bp3-col-5-12 mar-bot-1">			
				<?php $sidebar = get_post_meta($post->ID, 'sidebar', true);
				get_sidebar($sidebar);
				?>
			</div>	
		</div> <!-- /.grid-wrap -->
		
	</div>
	<div class="post-content-spacer"></div>
	
	<?php endwhile; ?>	

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>