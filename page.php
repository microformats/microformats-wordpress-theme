<?php get_header(); ?>

	<div id="content">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
	  endwhile;
endif;
	?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
