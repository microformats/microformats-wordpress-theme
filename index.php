<?php get_header(); ?>

	<div id="content" class="hfeed">
		<h2 id="home-title">Latest microformats news <a href="<?php bloginfo( 'rss2_url' ); ?>" title="link to RSS feed" id="feed-link"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/xml.gif" width="23" height="13" alt="Feed" /></a></h2>
	<?php if ( have_posts() ) : ?>
		
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content' );
		endwhile; ?>
		
	<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
	
	<h3 id="archive-link">Browse all entries by month in the <a href="/blog/" class="more">blog archive</a></h3>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
