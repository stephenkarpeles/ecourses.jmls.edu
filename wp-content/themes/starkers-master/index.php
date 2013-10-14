<?php

/**
 * Template Name: Home
 */

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	
	<div class="grid-wrap">
		<div class="grid-col col-1-1">
			<div class="slider">
				<?php echo do_shortcode("[metaslider id=39]"); ?>
			</div>	
		</div>
	</div> <!-- /.grid-wrap -->

	<div class="grid-wrap">		
		<div class="grid-col col-1-1 bp2-col-2-3">	
			<div class="grid-wrap">
				<div class="grid-col bp1-col-1-2">	
					<div class="home-featured mar-bot-14">
						<h1 class="h1-alt mar-bot-1 mar-top-0">LLM &amp; MS Degree Programs</h1>
						<h2 class="h2-alt mar-top-1"><a href="<?php bloginfo('url'); ?>/why-llm-ms">Advantages of an Advanced Law Degree</a></h2>
						<p>Learn how to enhance your marketability with one of The John Marshall Law School&rsquo;s specialized advanced graduate law degrees.</p>
						<a href="<?php bloginfo('url'); ?>/why-llm-ms"><div class="btn btn-1 delta text-shadow-1"><strong><span class="btn-icon icon-plus" aria-hidden="true" data-icon="&#xe000;"></span>Advance Here</strong></div></a>
					</div>	
				</div>
				<div class="grid-col bp1-col-1-2">
					<div class="home-featured mar-bot-14">
						<h1 class="h1-alt mar-bot-1 mar-top-0">Online LLM &amp; MS Law Degrees</h1>
						<h2 class="h2-alt mar-top-1"><a href="<?php bloginfo('url'); ?>/benefits-of-distance-education">Benefits of Distance Education</a></h2>
						<p>Find out how John Marshall&rsquo;s distance education program offers you the flexibility and convenience to take graduate law degrees anytime, anywhere.</p>
						<a href="<?php bloginfo('url'); ?>/benefits-of-distance-education"><div class="btn btn-1 delta text-shadow-1"><strong><span class="btn-icon icon-arrow" aria-hidden="true" data-icon="&#xe005;"></span>Start Online</strong></div></a>
					</div>
				</div>
			</div> <!-- /.grid-wrap -->	
			<div class="grid-wrap">
				<div class="grid-col bp1-col-1-2">	
					<div class="home-featured mar-bot-14">
						<h1 class="h1-alt mar-bot-1 mar-top-0">The John Marshall Law School</h1>
						<h2 class="h2-alt mar-top-1"><a href="<?php bloginfo('url'); ?>/about">Innovating Legal Education</a></h2>
						<p>The John Marshall Law School has a legacy of pioneering innovation in legal education since 1899. Learn more about our mission and rich traditions.</p>
						<a href="<?php bloginfo('url'); ?>/about"><div class="btn btn-1 delta text-shadow-1"><strong><span class="btn-icon icon-books" aria-hidden="true" data-icon="&#xe004;"></span>Learn More</strong></div></a>
					</div>
				</div>
				<div class="grid-col bp1-col-1-2">
					<div class="home-featured mar-bot-14">
						<h1 class="h1-alt mar-bot-1 mar-top-0">Distance Education</h1>
						<h2 class="h2-alt mar-top-1"><a href="<?php bloginfo('url'); ?>/faqs">Frequently Asked Questions</a></h2>
						<p>How is an online class different than the classroom? Can I complete a degree online? Do I need special software? Get answers to your questions.</p>
						<a href="<?php bloginfo('url'); ?>/faqs"><div class="btn btn-1 delta text-shadow-1"><strong><span class="btn-icon icon-page" aria-hidden="true" data-icon="&#xe002;"></span>Get Answers</strong></div></a>
					</div>
				</div>
			</div> <!-- /.grid-wrap -->	
		</div> <!-- /.grid-col -->
		<div class="grid-col col-1-1 bp2-col-1-3">
			<aside class="home-aside mar-bot-14">
				<h4 class="mar-top-0">Tour JMLS eDegrees Online:</h4>
				<div class="video"> <!-- .video class has to match class in fitvids.js script -->
					<iframe width="560" height="315" src="//www.youtube.com/embed/HfV4cJu3ch0?rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
				</div>
				
				<div class="video-caption">
					<p><em>Watch our video</em></p>
				</div>

				<div class="home-member-badge">
					<a href="<?php bloginfo('url'); ?>/apply">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cba-members-badge.png" alt="CBA Members Discount">
					</a>	
				</div>

				<!--				
				<div class="home-form">
				    <hr class="mar-top-6">
				    <h4 class="mar-top-4">Request Information:</h4>
				    <?php echo do_shortcode( '[contact-form-7 id="217" title="Home RFI"]' ); ?>
				</div>
				-->
				
			</aside>
		</div>
	</div> <!-- /.grid-wrap -->	
	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>