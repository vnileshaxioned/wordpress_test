<?php

add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
  wp_enqueue_style('custom-styling', get_stylesheet_uri());
  wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
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

add_action( 'init', 'work_post_type');
function work_post_type() {
  $labels = array(
    'name'                => _x( 'Work', 'Post Type General Name', 'axionedtheme' ),
    'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'axionedtheme' ),
    'menu_name'           => __( 'Work', 'axionedtheme' ),
    'all_items'           => __( 'All Work', 'axionedtheme' ),
    'add_new'             => __( 'Add New', 'axionedtheme' ),
    'edit_item'           => __( 'Edit Work', 'axionedtheme' ),
    'update_item'         => __( 'Update Work', 'axionedtheme' ),
    'search_items'        => __( 'Search Work', 'axionedtheme' ),
    'not_found'           => __( 'Not Found', 'axionedtheme' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'axionedtheme' ),
  );
  $args = array(
    'label'               => __( 'work', 'axionedtheme' ),
    'description'         => __( 'work description', 'axionedtheme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-portfolio',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => array('post_tag' ),
  );
  register_post_type( 'work', $args );
}

add_filter('use_block_editor_for_post', '__return_false');

?>