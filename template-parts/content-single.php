<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry', 'single', 'h-entry' ) ); ?>>
	<h2 class="entry-title p-name" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<div class="entry-content e-content">
		<?php the_content( '<p class="serif">Read the rest of this entry &raquo;</p>' ); ?>
	</div>

	<?php
	wp_link_pages(
		array(
			'before'         => '<p><strong>Pages:</strong> ',
			'after'          => '</p>',
			'next_or_number' => 'number',
		)
	);
	?>

	<?php if ( get_the_tag_list() ) : ?>
		<div class="post-tags">
			<h4>Tags for this entry</h4>
			<?php echo get_the_tag_list( '<ul><li>', ', </li><li>', '</li></ul>' ); ?>
		</div>
	<?php endif; ?>

	<ul class="post-info">
		<li>
			<a class="u-url" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<time class="published updated dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'l, F jS, Y' ); ?> at <?php the_time(); ?></time>
			</a>
		</li>
		<li>
			<address class="author vcard p-author h-card">
			<a class="url u-url" href="<?php the_author_meta( 'url' ); ?>">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 16, '', '', array( 'class' => 'u-photo' ) ); ?>
			<span class="fn p-name"><?php the_author(); ?></span>
			</a>
			</address>
		</li>
		<li>
			<?php
			/* Technorati Reactions Removed */
			?>
		</li>
	</ul>

	<?php comments_template(); ?>
</article>
