<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="subPageBody">
				<div class="pageTitle">
					<h2><?php _e( 'Page Not Found', 'ecourses' ); ?></h2>
				</div>
				<div id="subPageContentFrame">
					<div id="subPageContentWide">
						<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'ecourses' ); ?></p>
						<br />
						<?php get_search_form(); ?>

					</div>
					
				
				</div>
				<div id="subPageLowerTag">
					eCourses.JMLS was developed by The John Marshall Law School using distance education<br>
					best-practices.	Our courses are taught by leading legal practitioners in each respective field.
				</div>
			</div>
			<div id="subPageSide">

				<div class="header"><h4>Request More Information</h4></div>
				<div class="sideContainer">
					<form action="#" method="post">
						<input type="text" name="moreInfoEmail" style="width:153px; border:1px solid #9c9c9c; padding:2px; margin:0 0 8px 0; font-size:.92em;" value="Your Email" /><br>
						<input type="image" src="<?php bloginfo('template_directory'); ?>/images/btn_sendInfoSmall.png" />
					</form>
				</div>
			
				<div id="sideBarPrograms">
					<div class="sideProgramUnselected">
						<div style="height:50%; margin-bottom:-1em;"></div>
						<h4>Intellectual<br>Property Law</h4>
					</div>
					
					<div class="sideProgramSelected">
					<div style="height:50%; margin-bottom:-1.5em;"></div>
						<h4>Information<br>Technology<br>and Privacy Law</h4>
					</div>
					
					<div class="sideProgramUnselected after">
						<div style="height:50%; margin-bottom:-1em;"></div>
						<h4>Employee <br>Benefits</h4>
					</div>
					
					<div class="sideProgramUnselected">
						<div style="height:50%; margin-bottom:-1em;"></div>
						<h4>Estate<br>Planning</h4>
					</div>
					
					<div class="sideProgramUnselected">
						<div style="height:50%; margin-bottom:-1.5em;"></div>
						<h4>Executive<br>Certification Legal<br>Program</h4>
					</div>
					<div class="sideProgramUnselected"><!-- Lower PlaceHolder --></div>
				</div>
			
			</div>

			
			<div class="clear"></div>
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>