<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> | weblog <?php } ?> <?php wp_title('|'); ?></title>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" />
	<!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" />	    
	<![endif]-->
	<!--[if lte IE 5.5]>
    <link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie5.css" />	    
	<![endif]-->
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
</head>
<body>

<div id="wrap">
	<div id="header">
		<h1><?php if ( is_home() ) { ?>
		    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" width="144" height="36" alt="microformats" />
		<? } else { ?>
		    <a href="/">
		        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" width="144" height="36" alt="microformats" />
		    </a>
		<? } ?></h1>
			
		<ul id="nav">
		<?php
		foreach(get_bookmarks('category=38&orderby=rating') as $bookmark_id => $bookmark) {

            /** Main menu links are now generated from the Wordpress links
             * system. That means the category=38 is the only hard coded part
             * of the theme. Everything else can be managed inside Wordpress
             * now. Yay!
             * Below is the code to establish the active page. The WP links
             * system wasn't designed for this, so when you add a menu item to
             * the Microformats.org Main Menu links category, you MUST add the
             * URL slug of the page you're linking to in the ‘Notes’ field. That
             * is used to check whether we're on that page or not. Fairly
             * graceful. */
		    $active ="";
		    if( 
		        ((is_home() || is_single() || is_archive()) && $bookmark->link_notes == 'blog')
		        || is_page($bookmark->link_notes)
		    ) {
		        $active = ' class="active"';
		    }
		    echo "<li$active><a href=\"{$bookmark->link_url}\" title=\"{$bookmark->link_description}\">{$bookmark->link_name}</a></li>\n";
		} ?>
		</ul>
	</div>
		
	<hr class="hide" />
	
