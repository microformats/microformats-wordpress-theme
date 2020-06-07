<?php

function microformatsorg_theme_setup() {
	// This theme uses wp_nav_menu() in for the top menu.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'microformats' ),
		)
	);

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

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
}
add_action( 'after_setup_theme', 'microformatsorg_theme_setup' );

function microformatsorg_widget_init() {
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Global Sidebar',
				'id'            => 'sidebar-1',
				'description'   => 'Sidebar appears on all pages',
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
			'id'            => 'sidebar-2',
			'description'   => 'Sidebar only appears on home page',
			'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'Post Page',
			'id'            => 'sidebar-3',
			'description'   => 'Sidebar only appears on post pages',
			'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'microformatsorg_widget_init' );

function microformatsorg_scripts() {
	// Theme stylesheets
	wp_enqueue_style(
		'microformatsorg-style',
		get_template_directory_uri() . '/style.css"',
		array(),
		'1.0',
		'screen'
	);
	wp_enqueue_style(
		'microformatsorg-print-style',
		get_template_directory_uri() . 'css/print.css"',
		array(),
		'1.0',
		'print'
	);
}

add_action( 'wp_enqueue_scripts', 'microformatsorg_scripts' );

function microformatsorg_footer() {
	if( defined( 'MICROFORMATS_GOOGLE_ANALYTICS' ) ) {
	?>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript" />
	<script type="text/javascript"> 
		_uacct = "<?php echo MICROFORMATS_GOOGLE_ANALYTICS;?>";
		urchinTracker();
	</script>
	<?php
	}
}

add_action( 'wp_footer', 'microformatsorg_footer' );
