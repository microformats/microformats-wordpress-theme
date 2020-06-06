<?php get_header(); ?>

<div id="content">
				
  <?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );
			comments_template();
		endwhile; else :
			?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
