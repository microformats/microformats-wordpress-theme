<?php get_header(); ?>
	<div id="content">
		<?php if ( have_posts() ) { ?>
			<?php the_archive_title( '<h2 class="pagetitle">', '</h2>' ); ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link( '', '', '&laquo; Previous Entries' ); ?></div>
			<div class="alignright"><?php posts_nav_link( '', 'Next Entries &raquo;', '' ); ?></div>
		</div>

			<?php
			while ( have_posts() ) :
				the_post();
				?>
		<div class="entry">
			<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			<ul class="post-info">
				<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time( 'F jS, Y' ); ?></a></li>
				<li><address class="vcard"><a class="url fn" href="<?php the_author_url(); ?>"><?php the_author( 'namefl' ); ?></a></address></li>
				<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
			</ul>
		</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link( '', '', '&laquo; Previous Entries' ); ?></div>
			<div class="alignright"><?php posts_nav_link( '', 'Next Entries &raquo;', '' ); ?></div>
		</div>
	<?php } else { ?>

		<h2 class="center">Not Found</h2>
			<?php include TEMPLATEPATH . '/searchform.php'; ?>

	<?php } ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
