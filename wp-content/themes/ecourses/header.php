<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ecourses
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="js/modernizr-1.5.min.js"></script>

</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body <?php body_class("ie6"); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class("ie7"); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class("ie8"); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class("ie9"); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class(); ?>> <!--<![endif]-->

 


<div id="wrapper" class="hfeed<?php if(!is_front_page() ) echo ' subpage'; ?>">
		<div id="header">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 id="site-title"><?php bloginfo( 'name' ); ?></h1></a>
		<!--<a href="index.php"><img src="images/ecoursesLogo.jpg" align="eDegrees.jmls Dynamic Graduate Law Degrees - Anytime, Anywhere" id="logo" /></a>-->
			<div id="headerContact">
				<a href="http://www.jmls.edu"><img src="<?php bloginfo('template_directory'); ?>/images/jmlsLogoSmall.jpg" /></a><br />
				<img src="<?php bloginfo('template_directory'); ?>/images/icon_phone.jpg" /> Call us in Chicago at <!--1.800.276.0003-->1.866.460.2022<br />
				<img src="<?php bloginfo('template_directory'); ?>/images/icon_envelope.jpg" /> Email us at <a href="/contact/">ecourses@jmls.edu</a></div>
			<div class="clear"></div>
		</div>
		<div id="nav">
			<ul class="sf-menu">
				<li><a href="/">Home</a></li>
				<li><a href="/why-llm-ms/">Why an LLM or MS</a><ul>
					<li><a href="/why-llm-ms/">LLM &amp; MS Advantages</a></li>
					<li><a href="http://www.jmls.edu/LLMdegrees/" target="_blank">LLM Degrees</a></li>
					<li><a href="http://www.jmls.edu/MSdegrees/" target="_blank">MS Degrees</a></li>
				</ul></li>
				<li><a href="#">Online Degrees</a><ul>
					<li><a href="/employee-benefits/">Employee Benefits</a></li>
					<li><a href="/estate-planning/">Estate Planning</a></li>					
					<li><a href="/information-technology-privacy-law/">Information Technology &amp; Privacy Law</a></li>
					<li><a href="/intellectual-property-law/">Intellectual Property Law</a></li>
					
					
				</ul></li>
				<li><a href="http://www.jmls.edu/admission/jd/tuition.php" target="_blank">Tuition</a></li>
				
				<li><a href="#">Faculty</a><ul>
					<li><a href="/employee-benefits/faculty/">Employee Benefits</a></li>
					<li><a href="/estate-planning/faculty/">Estate Planning</a></li>					
					<li><a href="/information-technology-privacy-law/faculty/">Information Technology &amp; Privacy Law</a></li>
					<li><a href="/intellectual-property-law/faculty/">Intellectual Property Law</a></li>
					
					
				</ul></li>
				<!--<li><a href="/news/">News</a></li>-->
				<li><a href="/contact/">Contact Us</a></li>
				<li class="apply"><a href="/apply/">Apply Now</a></li>
				<li><a href="/about/">About Us</a></li>
			</ul>
		</div>
		<div id="content">

