<?php

/* Main Sidebar */

?>

<div class="sidebar">
	<h4 class="mar-top-1">Tour JMLS eDegrees Online:</h4>
	<div class="video"> <!-- .video class has to match class in fitvids.js script -->
		<iframe width="560" height="315" src="//www.youtube.com/embed/HfV4cJu3ch0?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="video-caption">
		<p><em>Watch our video to learn more</em></p>
	</div>	
</div>

<?php if ( is_active_sidebar( 'main' ) ) : ?>	
		<?php dynamic_sidebar( 'main' ); ?>	
<?php endif; ?>
