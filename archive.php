<?php get_header(); ?>
	<div id="content">
		<?php
		if ( have_posts() ) {
			the_archive_title( '<h2 class="pagetitle">', '</h2>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous Entries', 'microformats' ),
					'next_text'          => __( 'Next Entries', 'microformats' ),
				)
			);
			while ( have_posts() ) :
				the_post();
				?>
		<?php get_template_part( 'template-parts/content' ); ?>
	
			<?php endwhile; ?>

			<?php

			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous Entries', 'microformats' ),
					'next_text'          => __( 'Next Entries', 'microformats' ),
				)
			);
			?>
	<?php } else { ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php } ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
