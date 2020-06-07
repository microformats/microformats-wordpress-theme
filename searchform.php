<form method="get" id="search" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div>
		<input type="text" value="search blog" name="s" id="search-text" onfocus="if(this.value=='' || this.value=='search blog'){this.value='';}" onblur="if(this.value==''){this.value='search blog';}" />
		<input type="image" id="search-submit" alt="Search" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/btn-search.gif" />
	</div>
</form>
