<?php

add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
  wp_enqueue_style('custom-styling', get_stylesheet_uri());
}

add_action('after_setup_theme', 'test_theme_setup');
function test_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'axionedtheme'),
    'secondary' => __('Secondary Menu', 'axionedtheme')
  ) );
}

add_filter('use_block_editor_for_post', '__return_false');

?>