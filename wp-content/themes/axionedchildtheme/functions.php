<?php

// enqueue the style and script files
add_action('wp_enqueue_scripts', 'test_theme_scripts');
function test_theme_scripts() {
  wp_enqueue_style('custom-styling', get_stylesheet_uri());
  wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

?>