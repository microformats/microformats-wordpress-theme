<div class="entry hentry">
	<h3 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php if ( get_the_tag_list() ) : ?>
		<div class="post-tags">
			<h4>Tags for this entry</h4>
			<?php echo get_the_tag_list( '<ul><li>', ', </li><li>', '</li></ul>' ); ?>
		</div>
	<?php endif; ?>
				
	<ul class="post-info">
		<li><a class="updated" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
			<span class="value-title" title="<?php the_time( 'Y-m-d\TH:i:s' ); ?>"> </span>
			<?php the_time( 'F jS, Y' ); ?>
		</a>
		</li>
		<li>
			<address class="author vcard">                
				<a class="url fn" href="<?php get_the_author_meta( 'url' ); ?>">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 16 ); ?>
					<?php the_author(); ?>
				</a>
			</address>
		</li>
		<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
		<li>
		 	<?php // Technorati reactions removed ?>
		</li>
	</ul>
</div>
