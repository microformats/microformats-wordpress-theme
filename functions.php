<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Global Sidebar',
        'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Home Page',
        'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Post Page',
        'before_widget' => '<div id="%1$s" class="box widget %2$s"><div class="box-inner">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
?>