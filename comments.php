<?php // Do not delete these lines
if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( ! empty( $post->post_password ) ) { // if there's a password
	if ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] != $post->post_password ) {  // and it doesn't match the cookie
		?>
				
				<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.' ); ?><p>
				
				<?php
				return;
	}
}

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ( $comments ) : ?>
	<h3 id="comments"><?php comments_number( 'No Responses', 'One Response', '% Responses' ); ?> to &#8220;<?php the_title(); ?>&#8221;</h3> 

	<ol class="com-list hfeed" id="comment-feed">

	<?php foreach ( $comments as $comment ) : ?>

		<li class="hentry <?php echo $oddcomment; ?>" id="comment-<?php comment_ID(); ?>">
			<cite class="entry-title author">
				<?php echo get_avatar( $comment, 50 ); ?>
				<?php comment_author_link(); ?>
			</cite>:
			
			<?php if ( $comment->comment_approved == '0' ) : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
						
			<div class="entry-content">
				<?php comment_text(); ?>
				<?php edit_comment_link( '<p>Edit Comment</p>', '', '' ); ?>
			 </div>
			
			<p class="com-meta">
				<a class="entry-title" rel="bookmark" href="#comment-<?php comment_ID(); ?>">
					<span class="updated">
						<span class="value-title" title="<?php comment_date( 'Y-m-d\TH:i:s' ); ?>"> </span>
						<?php comment_date( 'F jS, Y' ); ?> at <?php comment_time(); ?>
					</span>
				</a>
			</p>

		</li>

		<?php
		/* Changes every other comment to a different class */
		if ( 'alt' == $oddcomment ) {
			$oddcomment = '';
		} else {
			$oddcomment = 'alt';
		}
		?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	 <?php if ( 'open' == $post->comment_status ) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ( 'open' == $post->comment_status ) : ?>

<h3 id="respond">Leave a Reply</h3>

	<?php if ( get_option( 'comment_registration' ) && ! $user_ID ) : ?>
<p>You must be <a href="<?php echo get_option( 'siteurl' ); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

		<?php $hascommented = ( $comment_author != '' && $comment_author_email != '' ); ?>

<form action="<?php echo get_option( 'siteurl' ); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( $user_ID ) : ?>

<p>Logged in as <?php echo get_avatar( $comment, 16 ); ?> <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option( 'siteurl' ); ?>/wp-login.php?action=logout" title="<?php _e( 'Log out of this account' ); ?>">Logout &raquo;</a></p>

	<?php elseif ( $hascommented && ! isset( $_GET['changeDetails'] ) ) : ?>
	<input type="hidden" name="author" id="author" value="<?php echo $comment_author; ?>">
	<input type="hidden" name="email" id="email" value="<?php echo $comment_author_email; ?>">
	<input type="hidden" name="url" id="url" value="<?php echo $comment_author_url; ?>">

	<p>Welcome back, <?php echo get_avatar( $comment_author_email, 16 ); ?> <strong><?php echo $comment_author; ?></strong>. Leave a comment:
		<a href="<?php echo htmlspecialchars( $_SERVER['REQUEST_URI'] ) . '?changeDetails#respond'; ?>">Change Details &raquo;</a></p>

	<?php else : ?>

<p><label for="author">Name 
		<?php
		if ( $req ) {
			_e( '(required)' );}
		?>
</label><br />
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" /></p>

<p><label for="email">Email (will not be published) 
		<?php
		if ( $req ) {
			_e( '(required)' );}
		?>
</label><br />
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" /></p>

<p><label for="url">Website</label><br />
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" /></p>

	<?php endif; ?>

<p><label for="comment">Comment</label><br />
<textarea name="comment" id="comment" cols="50%" rows="10" style="width: 449px;"></textarea></p>

<p><input name="submit" type="submit" id="submit" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
		<?php do_action( 'comment_form', $post->ID ); ?>

</form>

	<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
