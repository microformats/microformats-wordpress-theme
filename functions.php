<?php


// This theme uses wp_nav_menu() in for the top menu.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'microformats' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Global Sidebar',
				'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
	}
	register_sidebar(
		array(
			'name'          => 'Home Page',
			'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'Post Page',
			'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

