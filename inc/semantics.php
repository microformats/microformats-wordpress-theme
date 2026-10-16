<?php
/**
 * Microformats websemantics
 *
 * Adds microformats2 classes to markup WordPress generates outside of the templates.
 *
 * @link https://microformats.org/wiki/microformats2
 */

/**
 * Adds microformats v2 support to the comment_author_link.
 *
 * @param string $link The comment author link HTML.
 *
 * @return string
 */
function microformatsorg_comment_author_link( $link ) {
	return preg_replace( '/(class\s*=\s*["\'])/i', '${1}u-url ', $link, 1 );
}
add_filter( 'get_comment_author_link', 'microformatsorg_comment_author_link' );

/**
 * Adds `p-category` to tag links.
 *
 * @param string[] $links The tag links HTML.
 *
 * @return string[]
 */
function microformatsorg_term_links_tag( $links ) {
	return preg_replace( '/<a /i', '<a class="p-category" ', $links );
}
add_filter( 'term_links-post_tag', 'microformatsorg_term_links_tag' );

/**
 * Add rel-prev attribute to next_posts_link (older entries).
 *
 * @param string $attr The link attributes.
 *
 * @return string
 */
function microformatsorg_next_posts_link_attributes( $attr ) {
	return $attr . ' rel="prev"';
}
add_filter( 'next_posts_link_attributes', 'microformatsorg_next_posts_link_attributes' );

/**
 * Add rel-next attribute to previous_posts_link (newer entries).
 *
 * @param string $attr The link attributes.
 *
 * @return string
 */
function microformatsorg_previous_posts_link_attributes( $attr ) {
	return $attr . ' rel="next"';
}
add_filter( 'previous_posts_link_attributes', 'microformatsorg_previous_posts_link_attributes' );
