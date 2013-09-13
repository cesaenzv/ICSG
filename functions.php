<?php

define('THEMEROOT', get_stylesheet_directory_uri());

define('JS_ROOT', THEMEROOT.'/js');
define('IMAGES_ROOT', THEMEROOT.'/images');
define('CSS_ROOT', THEMEROOT.'/css');

remove_filter( 'the_content', 'wpautop' );

add_theme_support( 'post-thumbnails' );

?>