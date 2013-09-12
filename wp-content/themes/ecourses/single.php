<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ecourses
 */

get_header(); ?>

	<div id="subPageBody">
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="pageTitle">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<h3 class="entry-meta"><?php //twentyten_posted_on(); ?></h3>
			</div>
		
			<div id="subPageContentFrame">
				<div id="subPageContentWide" class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'ecourses' ), 'after' => '</div>' ) ); ?>
				</div>
			</div>
			<div class="singleLower">
				<ul>
					<li>Posted In: <?php echo get_the_category_list( ', ' ); ?></li>
					<?php previous_post_link( '%link', '<li class="nav-previous meta-nav">' . _x( '&larr;', 'Previous post link', 'ecourses' ) . ' %title </li>' ); ?>
					<?php next_post_link( '%link', '<li class="nav-next meta-nav"> %title' . _x( '&rarr;', 'Next post link', 'ecourses' ) . '</li>' ); ?>
					
					<?php edit_post_link( __( 'Edit', 'ecourses' ), '<li class="edit-link">', '</li>' ); ?>
				</ul>
			</div>
		</div>
		
		<?php endwhile; // end of the loop. ?>

		<div id="subPageLowerTag">
			eDegrees.jmls was developed by The John Marshall Law School using distance education<br>
			best-practices.	Our courses are taught by leading legal practitioners in each respective field.
		</div>
	</div>
	
	<div id="subPageSide"><?php get_sidebar(); ?></div>
	<div class="clear"></div>

<?php get_footer(); ?>
