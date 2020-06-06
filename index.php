<?php get_header(); ?>

	<div id="content" class="hfeed">
		<h2 id="home-title">Latest microformats news <a href="<?php bloginfo( 'rss2_url' ); ?>" title="link to RSS feed" id="feed-link"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/xml.gif" width="23" height="13" alt="Feed" /></a></h2>
	<?php if ( have_posts() ) : ?>
		
		<?php
		while ( have_posts() ) :
			the_post();
			?>
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
						<a class="url fn" href="<?php the_author_url(); ?>">
							<?php echo get_avatar( get_the_author_email(), 16 ); ?>
							<?php the_author( 'namefl' ); ?>
						</a>
						</address>
					</li>
					<li><?php comments_popup_link( 'Add Comment', '1 Comment', '% Comments' ); ?></li>
					<li>
						<?php
						/*
						<script src="[?php bloginfo('stylesheet_directory'); ?]/scripts/technorati-reactions.js" type="text/javascript"></script>
						<a class="tr-linkcount" href="http://technorati.com/search/<?php the_permalink(); ?>">View blog reactions</a> */
						?>
					</li>
				</ul>
			</div>
		<?php endwhile; ?>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e( "Sorry, but you are looking for something that isn't here." ); ?></p>
		<?php include TEMPLATEPATH . '/searchform.php'; ?>

	<?php endif; ?>
	
	<h3 id="archive-link">Browse all entries by month in the <a href="/blog/" class="more">blog archive</a></h3>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
