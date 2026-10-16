<?php get_header(); ?>

	<div id="content" class="narrowcolumn hfeed h-feed">

	<?php if ( have_posts() ) : ?>

		<h2 class="pagetitle p-name">Search Results</h2>
		
		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link( '', '', '&laquo; Previous Entries' ); ?></div>
			<div class="alignright"><?php posts_nav_link( '', 'Next Entries &raquo;', '' ); ?></div>
		</div>


		<?php
		while ( have_posts() ) :
			the_post();
			?>
				
			<div class="entry hentry h-entry">
				<h3 id="post-<?php the_ID(); ?>" class="entry-title p-name"><a class="u-url url" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry-summary p-summary">
					<?php the_excerpt(); ?>
				</div>
				<ul class="post-info">
					<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><time class="published updated dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F jS, Y' ); ?></time></a></li>
					<li><address class="author vcard p-author h-card"><a class="url fn u-url p-name" href="<?php the_author_meta( 'url' ); ?>"><?php the_author(); ?></a></address></li>
					<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
				</ul>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link( '', '', '&laquo; Previous Entries' ); ?></div>
			<div class="alignright"><?php posts_nav_link( '', 'Next Entries &raquo;', '' ); ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include TEMPLATEPATH . '/searchform.php'; ?>

	<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
