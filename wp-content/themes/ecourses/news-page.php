<?php
/**
 * Template Name: News Stories List
 *
 * @package WordPress
 * @subpackage ecourses
 */

$postID = $wp_query->post->ID;
$selectedProgram = get_post_meta($postID, 'program', true);

get_header(); ?>

	<div id="subPageBody">
		<div class="pageTitle">
			<h2><?php the_title(); ?></h2>
		</div>
	
		<div id="subPageContentFrame">
			<div id="subPageContentWide">
				<?php //the_post(); ?>
				<?php //the_content(); ?>
				<?php //edit_post_link( __( 'Edit', 'ecourses' ), '<span class="edit-link">', '</span>' ); ?>
				
				<!--<hr>-->
				
				<?php
					query_posts('category_name=News&posts_per_page=10');
					if (have_posts()) : while (have_posts()) : the_post();
				?>
				<div class="newsPost">
				<h2 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?></a></h2>
				<small>Posted: <?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
				<div class="entry">
				<?php
				global $more;    // Declare global $more (before the loop).
				$more = 0;       // Set (inside the loop) to display content above the more tag.
				the_content('Read the rest of this entry &raquo;');
				?>
				</div></div>
				
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="clear"></div>
		
		<div id="subPageLowerTag">
			eDegrees.jmls was developed by The John Marshall Law School using distance education<br>
			best-practices.	Our courses are taught by leading legal practitioners in each respective field.
		</div>
	</div>
	
	<div id="subPageSide"><?php get_sidebar(); ?></div>
	<div class="clear"></div>

<?php get_footer(); ?>
