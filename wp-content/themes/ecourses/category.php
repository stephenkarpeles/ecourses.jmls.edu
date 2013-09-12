<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage ecourses
 */

get_header(); ?>

	<div id="subPageBody">
		<div class="pageTitle">
			<h2><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h2>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<h3 class="archive-meta">' . $category_description . '</h3>';
				?>
		</div>
	
		<div id="subPageContentFrame">
			<div id="subPageContentWide">
				<?php
				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
			</div>
		</div>
		<div id="subPageLowerTag">
			eCourses.JMLS was developed by The John Marshall Law School using distance education<br>
			best-practices.	Our courses are taught by leading legal practitioners in each respective field.
		</div>
	</div>
	
	<div id="subPageSide"><?php get_sidebar(); ?></div>
	<div class="clear"></div>

<?php get_footer(); ?>
