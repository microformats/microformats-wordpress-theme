<hr class="hide" />
   
<div id="sidebar">    
<?php if ( function_exists( 'dynamic_sidebar' ) ) {
	/* WordPress Widgets Support */
	if ( is_home() ) {
		dynamic_sidebar( 'Home Page' );
	}
	if ( is_single() || is_page() ) {
		dynamic_sidebar( 'Post Page' );
	}
	dynamic_sidebar( 'Global Sidebar' );

} ?>
	  
	<div class="box">
		<div class="box-inner">
			<?php require TEMPLATEPATH . '/searchform.php'; ?>
		</div>
	</div>

	<div class="box">
		<div class="box-inner">
			<?php /* technorati code removed */ ?>
		</div>
	</div>

</div> <!-- end #sidebar -->
