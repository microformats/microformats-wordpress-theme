<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">

<h2>Blog Archive by Month:</h2>
  <ul>
	<?php wp_get_archives( 'type=monthly' ); ?>
  </ul>

</div>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
