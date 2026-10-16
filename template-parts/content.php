<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry', 'h-entry' ) ); ?>>
	<h3 class="entry-title p-name" id="post-<?php the_ID(); ?>"><a class="u-url url" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	<div class="entry-content e-content">
		<?php the_content(); ?>
	</div>
	<?php if ( get_the_tag_list() ) : ?>
		<div class="post-tags">
			<h4>Tags for this entry</h4>
			<?php echo get_the_tag_list( '<ul><li>', ', </li><li>', '</li></ul>' ); ?>
		</div>
	<?php endif; ?>

	<ul class="post-info">
		<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<time class="published updated dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F jS, Y' ); ?></time>
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
		<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
		<li>
		 	<?php // Technorati reactions removed ?>
		</li>
	</ul>
</article>
