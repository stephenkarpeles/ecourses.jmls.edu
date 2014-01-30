	jQuery(document).ready(function($) {
		
		// Reponsive Nav Menu		
		 jQuery('#toggle-nav').click(function () {
			 var nav = jQuery('.top-nav');
			 if(nav.hasClass('showing')){
				 nav.removeClass('showing').addClass('hiding');
			 }else{
				 nav.removeClass('hiding').addClass('showing');
			 }
		 });
		 
		jQuery(window).resize(function(){
			var winwidth = jQuery(window).innerWidth();
			if(winwidth > 900){
				jQuery('.top-nav').removeClass('showing').removeClass('hiding');    
			}
		});

		// Dropdown menu
		jQuery('.dropdown-link').click(function() {
        jQuery('.sub-menu').toggleClass('visible');
    });		
		
		// Fitvids.js			
			// Target your .container, .wrapper, .post, etc.
			jQuery(".video").fitVids();	

		// Slideout Tab
		    var toggle = false;
		    $('.slideout-tab').click(function () {
			   	if (toggle == false) {
			        $('.slideout').stop().animate({
			            /* Set position to flush against right edge */
                        'right': '0px'
			        })		        
			       	toggle = true;
			       	$('.slideout-content').addClass('show-slideout');

			    } else {
			        $('.slideout').stop().animate({
            			/* Same as 'right' value on .slideout selector */
            			'right': '-400px'
			        });
			        toggle = false;
			        $('.slideout-content').removeClass('show-slideout');
			    }
			});

		// Fix z-index for youtube video embedding
			$('iframe').each(function() {
			  var url = $(this).attr("src");
			  if ($(this).attr("src").indexOf("?") > 0) {
			    $(this).attr({
			      "src" : url + "&wmode=transparent",
			      "wmode" : "Opaque"
			    });
			  }
			  else {
			    $(this).attr({
			      "src" : url + "?wmode=transparent",
			      "wmode" : "Opaque"
			    });
			  }
			});			

	});

