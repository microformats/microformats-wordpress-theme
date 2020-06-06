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
		<div class="entry">
			<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			<ul class="post-info">
				<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time( 'F jS, Y' ); ?></a></li>
				<li><address class="vcard"><a class="url fn" href="<?php the_author_meta( 'url' ); ?>"><?php the_author(); ?></a></address></li>
				<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
			</ul>
		</div>
	
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
