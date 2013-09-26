<?php
/**
 * Template Name: Faculty
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="content">	

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h2 class="mar-top-0 mar-bot-4"><?php the_title(); ?></h2>						
		
		<div class="grid-wrap">
			<div class="grid-col bp1-col-1-2 bp3-col-1-4">	
				<div class="featured-degree mar-bot-10">
					<h4 class="mar-top-1 bdr-bot-1">Employee Benefits</h4>
					<p><strong><a href="http://www.jmls.edu/directory/profiles/kennedy-kathryn/" target="blank">Kathryn J. Kennedy</a></strong><br>
					<em>Associate Dean</em></p>
					<p><strong><a href="http://www.gtlaw.com/People/JamesNelson" target="blank">James Nelson</a></strong><br>
					<em>Shareholder</em><br>
					Greenberg Traurig</p>
					<p><strong>James Sillery</strong><br>
					<em>Principal</em><br>
					Buck Consultants</p>
				</div>
			</div>	          
							  
			<div class="grid-col bp1-col-1-2 bp3-col-1-4">	
				<div class="featured-degree mar-bot-10">
					<h4 class="mar-top-1 bdr-bot-1">Estate Planning</h4>
					<p><strong><a href="http://www.jmls.edu/directory/profiles/morris-malcolm/" target="blank">Malcolm L. Morris</a></strong><br>
					<em>Associate Director</em></p>
					<p><strong><a href="http://www.handlerthayer.com/berek_bio.html" target="blank">David Berek</a></strong><br>
					<em>Partner</em><br>
					Handler Thayer, LLP</p>				
					<p><strong><a href="http://mainelaw.maine.edu/faculty/profiles/maine.html" target="blank">Jeffrey A. Maine</a></strong><br>
					<em>Associate Dean for Academic Affairs; Professor</em><br>
					University of Maine School of Law</p>
					<p><strong><a href="http://www.burkelaw.com/Staff/Jonathan+W+Michael" target="blank">Jonathan W. Michael</a></strong><br>
					<em>Shareholder</em><br>
					Burke Warren MacKay &amp; Serritella, PC</p>				
				</div>
			</div>	
			
			<div class="grid-col bp1-col-1-2 bp3-col-1-4">		
				<div class="featured-degree mar-bot-10">
					<h4 class="mar-top-1 bdr-bot-1">Information Technology &amp; Privacy Law</h4>
					<p><strong><a href="http://www.linkedin.com/profile/view?id=54517430&authType=NAME_SEARCH&authToken=HNwV&locale=en_US&srchid=117008101376336559165&srchindex=1&srchtotal=11&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A117008101376336559165%2CVSRPtargetId%3A54517430%2CVSRPcmpt%3Aprimary" target="_blank">Shamla Naidoo</a></strong><br>
					<em>Attorney/Consultant</em></p>
					<p><strong><a href="http://www.linkedin.com/in/christiansengeddes" target="_blank">Sharon Christiansen</a></strong><br>
					<em>Attorney</em></p>
				</div>
			</div>	
			
			<div class="grid-col bp1-col-1-2 bp3-col-1-4">			
				<div class="featured-degree mar-bot-10">
					<h4 class="mar-top-1 bdr-bot-1">Intellectual Property Law</h4>	
					<p><strong><a href="http://www.jmls.edu/directory/profiles/long-doris/" target="blank">Doris E. Long</a></strong><br>
					<em>Director</em></p>					
					<p><strong><a href="http://www.jmls.edu/directory/profiles/mcgrath-william/" target="blank">William T. McGrath</a></strong><br>
					<em>Associate Director</em></p>
					<p><strong><a href="http://www.ngelaw.com/jmuraff/" target="blank">James P. Muraff</a></strong><br>
					<em>Partner</em><br>
					Neal, Gerber &amp; Eisenberg LLP</p>
					<p><strong>Richard Gruner</strong><br>
					<em>Adjunct Professor</em><br></p>
					<p><strong>John Malcolm White</strong><br>
					<em>Attorney</em><br></p>
				</div>
			</div>	
		</div><!-- /.grid-wrap -->
		
		<?php endwhile; ?>	

	</div>	
	<div class="post-content-spacer"></div>
	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>