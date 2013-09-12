<div class="main-search">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<div><label class="screen-reader-text" for="s"></label>
			<span class="header-searchbar">
				<input type="text" value="Enter your email address" name="s" id="s" onfocus="if (this.value=='Enter your email address') this.value = ''" />
			</span>
			<input type="submit" id="searchsubmit" value="Get Info" />			
		</div>
	</form>
</div>