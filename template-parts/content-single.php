<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry', 'single' ) ); ?>>
	<h2 class="entry-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<div class="entry-content">
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
			<a class="updated" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<span class="value-title" title="<?php the_time( 'Y-m-d\TH:i:s' ); ?>"> </span>
			<?php the_time( 'l, F jS, Y' ); ?> at <?php the_time(); ?>
			</a>
		</li>
		<li>
			<address class="author vcard">                
			<a class="url fn" href="<?php the_author_meta( 'url' ); ?>">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 16 ); ?>
			<?php the_author(); ?>
			</a>
			</address>
		</li>
		<li>
			<?php
			/* Technorati Reactions Removed */
			?>
		</li>
	</ul>
</article>
