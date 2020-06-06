<?php get_header(); ?>

<div id="content">
				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="entry single hentry">
			<h2 class="entry-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	        <div class="entry-content">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	        </div>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

            <?php if(get_the_tag_list()): ?>
            <div class="post-tags">
                <h4>Tags for this entry</h4>
                <?php echo get_the_tag_list('<ul><li>',', </li><li>','</li></ul>'); ?>
            </div>
            <?php endif; ?>
	
			<ul class="post-info">
				<li>
				    <a class="updated" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				        <span class="value-title" title="<?php the_time('Y-m-d\TH:i:s');?>"> </span>
				        <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
				    </a>
				</li>
				<li>
				    <address class="author vcard">                
        			    <a class="url fn" href="<?php the_author_url() ?>">
        			        <?php echo get_avatar( get_the_author_email(), 16 ); ?>
        			        <?php the_author('namefl'); ?>
        			    </a>
    			    </address>
			    </li>
                <li>
                    <?php /*<script src="≤?php bloginfo('stylesheet_directory'); ?≥/scripts/technorati-reactions.js" type="text/javascript"></script>
                    <a class="tr-linkcount" href="http://technorati.com/search/<?php the_permalink(); ?>">View blog reactions</a>*/ ?>
                </li>
			</ul>
		</div>
		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>
	
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	
<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>