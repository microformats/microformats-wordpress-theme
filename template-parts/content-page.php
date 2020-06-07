<div class="<?php post_class( 'post' ); ?>">
	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<div class="entrytext">
		<?php the_content( '<p class="serif">Read the rest of this page &raquo;</p>' ); ?>
		<?php
			wp_link_pages(
				array(
					'before'         => '<p><strong>Pages:</strong> ',
					'after'          => '</p>',
					'next_or_number' => 'number',
				)
			);

			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'microformatsorg' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>
	
	</div>
</div>
