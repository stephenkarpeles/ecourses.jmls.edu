<?php
/**
 * Template Name: Course Info
 *
 * A custom page design for the home screen
 *
 *
 * @package WordPress
 * @subpackage ecourses
 */

$postID = $wp_query->post->ID;
$selectedProgram = get_post_meta($postID, 'program', true);
$pageEyebrow = get_post_meta($postID, 'eyebrow', true);
$pageRealTitle = get_post_meta($postID, 'pageTitle', true); // This is done because a bunch of pages have the same title, and it makes it difficult to updated content

switch($selectedProgram)
{	
	case "intellectual-property-law":
		$overviewLinks = '<ul><li><a href="http://www.jmls.edu/academics/ip/llm-ip-law.php" target="_blank">LLM</a> | <a href="http://www.jmls.edu/academics/ip/ms-ip-law.php" target="_blank">MS</a></li></ul>';
		$learnMoreLink = '<a href="http://www.jmls.edu/academics/ip/" target="_blank">Learn More About<br>Intellectual Property Law</a>';
		break;

	case "information-technology-privacy-law":
		$overviewLinks = '<ul><li><a href="http://www.jmls.edu/academics/it-privacy/llm-it-privacy-law.php" target="_blank">LLM</a> | <a href="http://www.jmls.edu/academics/it-privacy/ms-it-privacy-law.php" target="_blank">MS</a></li></ul>';
		$learnMoreLink = '<a href="http://www.jmls.edu/academics/it-privacy/" target="_blank">Learn More About Information<br> Technology &amp; Privacy Law</a>';
		break;

	case "employee-benefits":
		$overviewLinks = '<ul><li><a href="http://www.jmls.edu/academics/taxeb/llm-eb.php" target="_blank">LLM</a> | <a href="http://www.jmls.edu/academics/taxeb/ms-eb.php" target="_blank">MS</a></li></ul>';
		$learnMoreLink = '<a href="http://www.jmls.edu/academics/taxeb/grad-eb.php" target="_blank">Learn More About<br>Employee Benefits</a>';
		break;
}

get_header(); ?>

	<div id="subPageBody">
		<div class="pageTitle">
			<h1><?php echo $pageRealTitle; ?></h1>
			<h2><?php echo $pageEyebrow; ?></h2>
		</div>
	
		<div id="subPageContentFrame">
			<div id="subPageContent">
				<?php
					the_post();
					the_content();
				?>
				<?php edit_post_link( __( 'Edit', 'ecourses' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<div id="subPageContentNav">
				<div id="subPageContanteNavHead">Program Information</div>
				<ul>
					<li><a href="/<?php echo $selectedProgram; ?>/">Overview</a><?php echo $overviewLinks; ?></li>
					<li><a href="/<?php echo $selectedProgram; ?>/course-descriptions/">Online Course<br>Descriptions</a></li>
					<li><a href="/<?php echo $selectedProgram; ?>/faculty/">Faculty</a></li>
					<li><a href="/<?php echo $selectedProgram; ?>/apply/">Apply Now!</a></li>
					<li><?php echo $learnMoreLink; ?></li>
				</ul>
				<a href="/materials/Spring-2012-Distance-Education-Courses.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/btn_sub_scheduleDownload.png" alt="Download our 2011 LLM & MS course schedule now" width="180" height="45" /></a>
			</div>
		</div>
		<div id="subPageLowerTag">
			Developed by The John Marshall Law School, eDegrees is an innovative distance education program taught by recognized legal specialists in a dynamic learning environment. 
		</div>
	</div>
	
	<div id="subPageSide"><?php
		include (TEMPLATEPATH . '/sidebar.php');
	?></div>
	<div class="clear"></div>

<?php get_footer(); ?>