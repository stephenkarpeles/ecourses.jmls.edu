<?php
/**
 * Template Name: Basic Page
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="content">
		
		<div class="grid-wrap">	
			<div class="grid-col bp1-col-7-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							
				<!-- Display the custom H1 page-real-title only if it exists -->
				<?php if( get_post_meta($post->ID, 'page-real-title', true) ) { ?>
					<h1 class="page-real-title delta mar-top-0"><?php echo get_post_meta($post->ID, 'page-real-title', true); ?></h1>
				<?php } ?>
				<!---->			
				<h2 class="mar-top-0 page-main-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php endwhile; ?>		
			</div>
				
			<div class="grid-col bp1-col-5-12">		
				<?php $sidebar = get_post_meta($post->ID, 'sidebar', true);
				get_sidebar($sidebar);
				?>				
			</div>
		</div><!-- /.grid-wrap -->
		
	</div>
	<div class="post-content-spacer"></div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>