<?php

// enqueue the style and script files
add_action('wp_enqueue_scripts', 'test_theme_scripts');
function test_theme_scripts() {
  wp_enqueue_style('custom-styling', get_template_directory_uri() . '/style.css',);
  wp_enqueue_style('child-custom-styling', get_stylesheet_uri(), array('custom-styling'));
}

?>