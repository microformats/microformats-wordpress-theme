<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

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
					'container'      => '' // Do not wrap in <div>
				)
			);
			?>
			</nav>
		<?php } ?>
	</div>
		
	<hr class="hide" />
