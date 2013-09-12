<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage ecourses
 */

$postID = $wp_query->post->ID;
$selectedProgram = get_post_meta($postID, 'program', true);
$pageEyebrow = get_post_meta($postID, 'eyebrow', true);
$pageRealTitle = get_post_meta($postID, 'pageTitle', true); // This is done because a bunch of pages have the same title, and it makes it difficult to updated content

get_header(); ?>

	<div id="subPageBody">
		<div class="pageTitle">
			<h1><?php echo $pageEyebrow; ?></h1>
			<h2><?php echo $pageRealTitle; ?></h2>
		</div>
	
		<div id="subPageContentFrame">
			<div id="subPageContentWide">
				<?php the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'ecourses' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
		</div>
		<div class="clear"></div>
		<div id="subPageLowerTag">
			eCourses.JMLS was developed by The John Marshall Law School using distance education<br>
			best practices.	Our courses are taught by leading legal practitioners in each respective field.
		</div>
	</div>
	
	<div id="subPageSide"><?php get_sidebar(); ?></div>
	<div class="clear"></div>

<?php get_footer(); ?>
