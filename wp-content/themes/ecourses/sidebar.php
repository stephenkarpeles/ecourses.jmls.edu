<?php

/**

 * The Sidebar no widgets

 *

 * @package WordPress

 * @subpackage ecourses

 */ 

?>



			<div class="header"><h4>Request More Information</h4></div>

				<div class="sideContainer">

					<form method="post" action="http://oi.vresp.com?fid=a8ecee46cb" target="vr_optin_popup" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >

						<input name="email_address" type="text" id="emailInput" style="width:153px; border:1px solid #9c9c9c; padding:2px; margin:0 0 8px 0; font-size:.92em;" value="Your Email" />

						<input type="image" src="<?php bloginfo('template_directory'); ?>/images/btn_sendInfoSmall.png" />

					</form>

				</div>

			

				<div id="sideBarPrograms">

					<div class="<?php echo ($selectedProgram != "employee-benefits" ? "sideProgramUnselected" : "sideProgramSelected"); ?><?php /*if($selectedProgram == "information-technology-privacy-law") echo " after"; */?>">
					<div style="height:50%; margin-bottom:-1.5em;"></div>
					<h4><a href="/employee-benefits/">Employee<br>Benefits</a></h4>
					</div>

					<div class="<?php echo ($selectedProgram != "estate-planning" ? "sideProgramUnselected" : "sideProgramSelected"); ?><?php /*if($selectedProgram == "employee-benefits") echo " after"; */?>">
					<div style="height:50%; margin-bottom:-1.5em;"></div>
					<h4><a href="/estate-planning/">Estate<br>Planning</a></h4>
					</div>

					<div class="<?php echo ($selectedProgram != "intellectual-property-law" ? "sideProgramUnselected" : "sideProgramSelected"); ?>">
					<div style="height:50%; margin-bottom:-1em;"></div>
					<h4><a href="/intellectual-property-law/">Intellectual<br>Property Law</a></h4>
					</div>

					<div class="<?php echo ($selectedProgram != "information-technology-privacy-law" ? "sideProgramUnselected" : "sideProgramSelected"); ?><?php /*if($selectedProgram == "intellectual-property-law") echo " after"; */?>">
					<div style="height:50%; margin-bottom:-1.5em;"></div>
					<h4><a href="/information-technology-privacy-law/">Information<br>Technology<br>&amp; Privacy Law</a></h4>
					</div>


					<div class="sideProgramUnselected<?php /*if($selectedProgram == "information-technology-privacy-law") echo " after"; */?>"><!-- Lower PlaceHolder --></div>

				</div>