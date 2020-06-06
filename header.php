<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php bloginfo( 'name' ); ?> <?php
	if ( is_single() ) {
		?>
		 | weblog 
								   <?php
	}
	?>
			<?php wp_title( '|' ); ?></title>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/print.css" />
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>

<div id="wrap">
	<div id="header">
		<h1>
		<?php if ( is_home() ) { ?>
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.gif" width="144" height="36" alt="microformats" />
		<?php } else { ?>
			<a href="/">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.gif" width="144" height="36" alt="microformats" />
			</a>
		<?php } ?></h1>
			
		<?php if ( has_nav_menu( 'primary' ) ) { ?>
			<nav id="nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
				)
			);
			?>
			</nav>
		<?php } ?>
	</div>
		
	<hr class="hide" />
