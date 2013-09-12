<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage ecourses
 */
?>


		</div>

		<div id="footer">
			<div id="footerTop"></div>
			<div id="footerLinks">
				<strong>&copy; <?php echo date('Y');?> <a href="http://www.jmls.edu/">The John Marshall Law School</a></strong><br />
				<a href="/">Home</a> |  <a href="/news/">News</a> |  <a href="/contact/">Contact Us</a> |  <a href="/apply/">Apply Now</a><br />
				<a href="http://www.jmls.edu/academics/taxeb/" target="_blank">Graduate Employee Benefits Programs</a><br />
				<a href="http://www.jmls.edu/academics/taxeb/llm-estateplanning.php" target="_blank">LLM in Estate Planning</a><br />
				<a href="http://www.jmls.edu/academics/it-privacy/" target="_blank">Graduate Information Technology &amp; Privacy Law Programs</a> <br />
				<a href="http://www.jmls.edu/academics/ip/" target="_blank">Graduate Intellectual Property Law Programs</a><br />
				
				
				<a href="http://www.jmls.edu/policy/privacy.php" target="_blank">Privacy Policy</a> | <a href="http://www.jmls.edu/policy/non-discrimination.php" target="_blank">Non-Discrimination Policy</a>
			</div>
			<div id="footerContact">
				<a href="http://www.jmls.edu"><img src="<?php bloginfo('template_directory'); ?>/images/jmlsLogoExtraSmall.png" style="margin-bottom:8px;" /></a><br />
				315 S. Plymouth Court. Chicago, IL 60604<br />
				Call us at <!--1.800.276.0003-->1.866.460.2022<br />
				Email us at <a href="mailto:ecourses@jmls.edu">ecourses@jmls.edu</a>
			</div>
		</div>
	</div>




  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"><\/script>')</script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jwplayer.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/hoverIntent.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/supersubs.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js?v=1"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/script.js?v=1"></script>
  

  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js?v=1"></script>
  <![endif]-->

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = [['_setAccount', 'UA-400422-3'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1002683811;
var google_conversion_label = "itqTCO3XiQkQo_uO3gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1002683811/?value=0&amp;label=itqTCO3XiQkQo_uO3gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>