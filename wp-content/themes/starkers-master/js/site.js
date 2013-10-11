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
		
		
		// Fitvids.js	
		
			// Target your .container, .wrapper, .post, etc.
			jQuery(".video").fitVids();	

		// Slideout Tab
		    var toggle = false;
		    $('.slideout-tab').click(function () {
		   	if (toggle == false) {
		        $('.slideout').stop().animate({
		            /* Positive value of 'right' property on .slideout-content in _slideout.scss */
		            'right': '450px'
		        });
		       	toggle = true;
		    } else {
		        $('.slideout').stop().animate({
		            /* Set position back to flush right against edge of browser */
		            'right': '0px'
		        });
		        toggle = false;
		    }
});




	});

